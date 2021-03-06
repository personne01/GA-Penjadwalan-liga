<?php

namespace App\Controllers;

use App\Models\UserModel;

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

    protected $userModel;
    //TUTORIAL KOTA KODE
    public function __construct()
    {
        $this->session = session();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin - FFI'
        ];
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        if ($this->session->get('level_user') != 2) {
            return redirect()->to('/user');
        }

        return view('user/index', $data);
    }
}
