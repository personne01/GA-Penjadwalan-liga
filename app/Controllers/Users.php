<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {
        $user = $this->userModel->findAll();
        $data = [
            'title' => 'Users',
            'user' => $user
        ];

        return view('dashboard/users', $data);
    }
    public function detail($id_user)
    {
        $detailUser = $this->userModel->find($id_user);
        dd($detailUser);
    }
}
