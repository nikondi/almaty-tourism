<?php

use App\Facades\Vite;

function vite(string|array $asset): string
{
    return Vite::getInstance()->tags($asset);
}
