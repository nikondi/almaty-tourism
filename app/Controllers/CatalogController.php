<?php

namespace App\Controllers;

class CatalogController extends Controller
{
    public function index(): string
    {
        return $this->render("pages/catalog", [
            'title' => 'Каталог'
        ]);
    }
    public function show(): string
    {
        return $this->render("pages/catalog-single", [
            'title' => 'Карточка подрядчика'
        ]);
    }
}