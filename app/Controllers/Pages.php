<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\NewsModel;

class Pages extends Controller
{
    public function index()
    {
        return view('pages/home', ['title' => 'welcome_message']);
    }

    public function view($page = 'home')
    {
        if (! is_file(APPPATH . '/Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }


        $data['title'] = ucfirst($page); // Capitalize the first letter
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews();

        echo view('templates/header', $data);
        echo view('pages/' . $page, $data);
        echo view('templates/footer', $data);
    }
}
