<?php


namespace App\Controller\Errors;


use App\Controller\Controller;

class Error404 extends Controller
{
    public function index() {
        $this->generate('errors/error404/index');
    }
}