<?php

namespace App\Controllers;

class InventoryController extends BaseController
{
    public function index(): void
    {
        $this->render('inventory/index');
    }
}
