<?php

namespace App\Controllers;

class CrmController extends BaseController
{
    public function index(): void
    {
        $this->render('crm/index');
    }
}
