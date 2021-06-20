<?php

namespace App\Controllers;

class User extends BaseController
{

    // public function index()
    // {
    //     $data = [
    //         'title' => 'Dashboard User | Sivax',
    //         'nav' => 'dashboard'

    //     ];
    //     return view('user/index', $data);
    // }
    // public function daftar()
    // {
    //     $data = [
    //         'title' => 'Daftar Vaksin | Sivax ',
    //         'nav' => 'daftar',
    //     ];
    //     return view('user/daftar', $data);
    // }

    //TUTORIAL KOTA KODE
    public function __construct()
    {
        $this->session = session();
    }

    public function index()
    {
        $data = [
            'title' => "User - Sivax"
        ];
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        return view('user/index', $data);
    }
}
