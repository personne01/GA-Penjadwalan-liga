<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{

    // protected $adminModel;
    // public function __construct()
    // {
    //     $this->adminModel = new AdminModel();
    // }

    // public function index()
    // {
    //     $users = $this->adminPanel->findAll();
    //     $data = [
    //         'title' => 'Dashboard Admin | Admin-Sivax',
    //         'user' => $users

    //     ];
    //     return view('admin/index', $data);
    // }
    // public function edit()
    // {
    //     $data = [
    //         'title' => 'Edit user | Admin-Sivax ',
    //         'nav' => 'daftar',
    //     ];
    //     return view('admin/edit', $data);
    // }

    // TUTORIAL KOTAKODE
    public function __construct()
    {
        $this->session = session();
    }

    public function index()
    {
        $data = [
            'title' => 'User - Sivax'
        ];
        //cek apakah ada session bernama isiLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        if ($this->session->get('level_user') != 1) {
            return redirect()->to('/user');
        }

        return view('admin/index', $data);
    }
}
