<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login | Sivax'
        ];

        return view('pages/login', $data);
    }
    public function about()
    {
    }
}
