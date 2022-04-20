<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Sivax - Sistem Informasi Vaksin',
            'nav' => 'Home'

        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | Sivax - Sistem Informasi Vaksin',
            'nav' => 'Page',
        ];
        return view('pages/about', $data);
    }
}
