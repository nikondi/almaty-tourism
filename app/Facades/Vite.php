<?php

namespace App\Facades;

use RuntimeException;

class Vite
{
    private static ?Vite $instance = null;
    private string $devServerUrl; // Например: http://localhost:5173
    private ?array $manifest = null;
    private bool $isDev = false;
    private string $assetUrl;
    private string $manifestPath;
    protected static bool $devInited = false;

    private function __construct(string $manifestPath, string $assetUrl, string $devServerUrl = null)
    {
        $this->manifestPath = $manifestPath;
        $this->assetUrl = rtrim($assetUrl, '/') . '/';
        $this->devServerUrl = rtrim($devServerUrl, '/') . '/';
        // Определяем режим: dev — если манифест недоступен ИЛИ вы вручную укажете
        // Но лучше — проверить доступность dev-сервера (опционально с флагом)
        // Здесь: если manifest.json не существует — считаем, что dev-режим
        $this->isDev = file_exists(BASE_PATH . '/public/hot');

        if (!$this->isDev) {
            $json = file_get_contents($this->manifestPath);
            $this->manifest = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
        }
    }

    public static function configure(string $manifestPath, string $assetUrl, string $devServerUrl): Vite
    {
        self::$instance = new Vite($manifestPath, $assetUrl, $devServerUrl);
        return self::getInstance();
    }

    public static function getInstance(): Vite
    {
        if (self::$instance === null) {
            // Значения по умолчанию — под стандартную сборку Vite
            throw new RuntimeException("Vite not configured");
        }
        return self::$instance;
    }

    public function reset(): void
    {
        self::$instance = null;
    }

    public function tags(string|array $entry): string
    {
        if (is_array($entry)) {
            $result = '';
            foreach ($entry as $item) {
                $result .= $this->tags($item);
            }
            return $result;
        }

        if ($this->isDev) {
            return $this->devTags($entry);
        }

        return $this->prodTags($entry);
    }

    private function devTags(string $entry): string
    {
        if (!static::$devInited) {
            $res = <<<HTML
                <script type="module" src="{$this->devServerUrl}@vite/client"></script>
HTML;
            static::$devInited = true;
        } else
            $res = '';


        return $res . <<<HTML
            <script type="module" src="{$this->devServerUrl}{$entry}"></script>
HTML;
    }

    private function prodTags(string $entry): string
    {
        if (!isset($this->manifest[$entry])) {
            return "<!-- Vite entry not found: " . htmlspecialchars($entry) . " -->";
        }

        $tags = '';
        $data = $this->manifest[$entry];

        if (!empty($data['css'])) {
            foreach ($data['css'] as $file) {
                $tags .= '<link rel="stylesheet" href="' . $this->assetUrl . $file . '">' . "\n";
            }
        }

        if (!empty($data['file'])) {
            $tags .= '<script type="module" src="' . $this->assetUrl . $data['file'] . '"></script>' . "\n";
        }

        return $tags;
    }
}