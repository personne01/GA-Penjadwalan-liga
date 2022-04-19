<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $session = session();
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
    public function create()
    {
        helper(['form']);
        $data = [];
        return view('dashboard/usersAdd', $data);
    }
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'user_name'     => $this->request->getVar('name'),
                'user_email'    => $this->request->getVar('email'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            session()->setFlashdata('pesan', 'data berhasil ditambahkan');
            return redirect()->to('/dashboard/users');
        } else {
            $data['validation'] = $this->validator;
            echo view('dashboard/usersAdd', $data);
        }
    }
}
