<?php

namespace App\Controller\Admin;

use App\Controller\Controller;

class Login extends Controller
{
    public function index() {
        $this->generate('admin/login/index');
    }
}