<?php

namespace App\Models;

class User
{
    public $users = [
        'people' => [
            ['name' => 'John', 'age' => 23, 'city' => 'NY'],
            ['name' => 'Julia', 'age' => 27, 'city' => 'Kharkov'],
            ['name' => 'Dmitriy', 'age' => 30, 'city' => 'Kiev'],
        ]
    ];

    public function getUser() {
        return $this->users;
    }
}