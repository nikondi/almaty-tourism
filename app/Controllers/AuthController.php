<?php

namespace App\Controllers;

class AuthController extends Controller
{
    protected string $layout = 'layout-auth';

    public function login(): ?string
    {
        return $this->render('pages/login', [
            'title' => 'Авторизация'
        ]);
    }

    public function register(): ?string
    {
        return $this->render('pages/register', [
            'title' => 'Регистрация'
        ]);
    }

    public function registerSuccess(): ?string
    {
        return $this->render('pages/register_success', [
            'title' => 'Успешная регистрация'
        ]);
    }

    public function recovery(): ?string
    {
        return $this->render('pages/recovery', [
            'title' => 'Восстановление пароля'
        ]);
    }

    public function recoverySended(): ?string
    {
        return $this->render('pages/recovery_sended', [
            'title' => 'Письмо отправлено'
        ]);
    }

    public function reset(): ?string
    {
        return $this->render('pages/reset', [
            'title' => 'Сброс пароля'
        ]);
    }
}