<?php

namespace App\Controller\Admin;

use App\Controller\Controller;

class Admin extends Controller
{
    public function index() {
        $this->generate('admin/admin/index');
    }
    public function dashboard() {
        $this->generate('admin/admin/dashboard');
    }
}