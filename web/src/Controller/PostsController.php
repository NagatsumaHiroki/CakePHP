<?php

namespace App\Controller;

class PostsController extends AppController
{
    public function initialize()
    {
        $this->loadComponent('Flash');
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
        //Post送信のデータか判定
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->data());
            if ($this->Posts->save($post)) {
                $this->Flash->success('Add Success!');
                return $this->redirect(['action' => 'index']);
            } else {
                //error
                $this->Flash->error('Add Error!');
            };
        }
        $this->set(compact('post'));
    }
}
