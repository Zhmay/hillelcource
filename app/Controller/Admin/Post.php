<?php

namespace App\Controller\Admin;

use App\Controller\Controller;
use App\Models\Post as PostModel;

class Post extends Controller
{
    public function post() {
        $postList = new PostModel();
        $data = $postList->getPost();
        $this->generate('admin/post/index', $data);
    }
}