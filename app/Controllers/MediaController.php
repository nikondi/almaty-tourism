<?php

namespace App\Controllers;

class MediaController extends Controller
{
  public function photo()
  {
      return $this->render("pages/media", [
          'title' => 'Фото и видеобанк',
          'type' => 'photo'
      ]);
  }
  public function video()
  {
      return $this->render("pages/media", [
          'title' => 'Фото и видеобанк',
          'type' => 'video'
      ]);
  }
}