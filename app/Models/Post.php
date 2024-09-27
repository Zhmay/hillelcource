<?php

namespace App\Models;

class Post
{
    public $list = [
        'posts' => [
            [
                'title' => 'How to learn PHP',
                'description' => 'We start with the fundamentals, including PHP syntax and variable declaration. The course transitions into working with objects, arithmetic operators, conditional statements, loops, functions and arrays.',
                'author' => 'Valery Shnurovoi'
            ],
            [
                'title' => 'Array methods',
                'description' => 'Short description about array methods',
                'author' => 'Valery Shnurovoi'
            ],
            [
                'title' => 'MVC pattern',
                'description' => 'MVC Pattern stands for Model-View-Controller Pattern. This pattern is used to separate application\'s concerns.',
                'author' => 'Valery Shnurovoi'
            ],
        ]
    ];

    public function getPost() {
        return $this->list;
    }
}