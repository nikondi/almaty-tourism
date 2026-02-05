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
        /* TODO: catalog single */
        return $this->render("pages/catalog-single", [
            'title' => 'Карточка подрядчика'
        ]);
    }
}