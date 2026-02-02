<?php

namespace App\Controllers;

class StoriesController extends Controller
{
    public function show(): string
    {
        return $this->render("pages/story", [
            'title' => 'История успеха'
        ]);
    }
    public function index(): string
    {
        return $this->render("pages/stories", [
            'title' => 'Истории успеха'
        ]);
    }
}