<?php

namespace App\Controllers;

use App\Facades\Vite;

class Controller
{
    public function __construct()
    {
        Vite::configure(BASE_PATH . '/public/build/.vite/manifest.json', 'localhost:8000/build/', 'http://localhost:5173');
    }

    protected function render(string $view, array $data = []): ?string
    {
        extract($data);
        ob_start();
        include BASE_PATH . '/resources/views/' . $view . '.php';
        $content = ob_get_clean();

        ob_start();
        include BASE_PATH . '/resources/views/layout.php';
        return ob_get_clean();
    }

    protected function json(array|string $data): string
    {
        header('Content-type: application/json');
        return json_encode($data);
    }
}