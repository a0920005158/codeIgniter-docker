<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\NewsModel;

class News extends Controller
{
    public function create()
    {
        $model = model(NewsModel::class);

        $m = $this->request->getMethod();
        $p = $this->request->getPost('title');
        $b = $this->request->getPost('body');
        if ($this->request->getMethod() === 'POST' && $this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body'  => 'required',
        ])) {

            $title = $this->request->getPost('title');
            $slug  = url_title($this->request->getPost('title'), '-', true);
            $body  = $this->request->getPost('body');

            $model->save([
                'title' => $this->request->getPost('title'),
                'slug'  => url_title($this->request->getPost('title'), '-', true),
                'body'  => $this->request->getPost('body'),
            ]);

            echo view('news/success');
        } else {
            $myLib = service('myLibrary');
            echo $myLib->hello();

            echo view('templates/header', ['title' => 'Create a news item']);
            echo view('news/create');
            echo view('templates/footer');
        }
    }
}
