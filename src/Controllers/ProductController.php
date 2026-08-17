<?php

namespace App\Controllers;

use App\Services\ProductService;

class ProductController extends BaseController
{
    private ProductService $service;

    public function __construct()
    {
        $this->service = new ProductService();
    }

    public function index(): void
    {
        $this->render('products/index');
    }

    public function create(): void
    {
        $this->render('products/create');
    }

    public function edit(int $id): void
    {
        $this->render('products/edit');
    }
}
