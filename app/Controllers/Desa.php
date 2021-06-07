<?php

namespace App\Controllers;

class Desa extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Desa | Sivax'
        ];

        return view('desa/index', $data);
    }
    public function about()
    {
    }
}
