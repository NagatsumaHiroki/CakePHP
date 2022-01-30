<?php

namespace App\Controller;

class PostsController extends AppController
{
    public function initialize()
    {
        $this->viewBuilder()->layout('my_layout');
    }
    public function index()
    {
        $posts = $this->Posts->find('all')->order(['title' => 'DESC']);
        $this->set(compact('posts'));
    }

    public function detail($id = null)
    {
        $posts = $this->Posts->find('all')->where(['id' => $id]);
        $this->set(compact('posts'));
    }

    public function add()
    {
        $post = $this->Posts->newEntity();
        $this->set(compact('post'));
    }
}
