<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home || GA Futsal'
        ];
        return view('pages/home', $data);
    }
    public function login()
    {
        $data = [
            'title' => 'Login || GA Futsal'
        ];
        return view('auth/login', $data);
    }
}
