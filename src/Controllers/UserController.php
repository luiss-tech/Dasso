<?php

namespace App\Controllers;

use App\Services\UserService;

class UserController extends BaseController
{
    private UserService $service;

    public function __construct()
    {
        $this->service = new UserService();
    }

    public function index(): void
    {
        $this->render('users/index');
    }

    public function create(): void
    {
        $this->render('users/create');
    }

    public function edit(int $id): void
    {
        $this->render('users/edit');
    }
}
