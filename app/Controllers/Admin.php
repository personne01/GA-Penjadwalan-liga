<?php

namespace App\Controllers;


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
            'title' => 'Admin - FFI'
        ];
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        if ($this->session->get('level_user') != 1) {
            return redirect()->to('/admin');
        }

        return view('admin/index', $data);
    }
}
