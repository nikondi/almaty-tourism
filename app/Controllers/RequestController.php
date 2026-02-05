<?php

namespace App\Controllers;

class RequestController extends Controller
{
    public function show(): string
    {
        return $this->render("pages/request", [
            'title' => 'Карточка заявки'
        ]);
    }
    public function index(): string
    {
        return $this->render("pages/requests", [
            'title' => 'Заявки'
        ]);
    }

    public function list(): string
    {
        return $this->render("pages/requests", [
            'title' => 'Заявки',
            'show_type' => 'list'
        ]);
    }
}