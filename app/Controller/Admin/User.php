<?php

namespace App\Controller\Admin;
use App\Controller\Controller;
use App\Models\User as UserModel;

class User extends Controller
{
    public function user() {
        $userList = new UserModel();
        $data = $userList->getUser();
        $this->generate('admin/user/index', $data);

    }
}