<?php

namespace App\Controllers;

class PwaController extends BaseController
{
    public function index(): void
    {
        $this->render('pwa/index');
    }
}
