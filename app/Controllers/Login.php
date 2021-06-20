<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Controllers\Home;
use App\Models\UserModel;

class Login extends BaseController
{
    // public function index()
    // {
    //     $data = [
    //         'title' => 'Login | Sivax'
    //     ];

    //     return view('auth/login', $data);
    // }
    // public function register()
    // {
    //     return view('auth/register');
    // }
    // public function user()
    // {
    //     return view('user/index');
    // }
    // public function auth()
    // {
    //     $session = session();
    //     $model = new UserModel();
    //     $username = $this->request->getVar('username');
    //     $password = $this->request->getVar('password');
    //     $data = $model->where('username', $username)->first();
    //     if ($data) {
    //         $pass = $data['password'];
    //         $verify_pass = password_verify($password, $pass);
    //         if ($verify_pass) {
    //             $ses_data = [
    //                 'id_user'       => $data['id_user'],
    //                 'id_desa'       => $data['id_desa'],
    //                 'username'     => $data['username'],
    //                 'level_user'    => $data['level_user'],
    //                 'logged_in'     => TRUE
    //             ];
    //             $session->set($ses_data);
    //             return redirect()->to('/user');
    //         } else {
    //             $session->setFlashdata('msg', 'Wrong Password');
    //             return redirect()->to('/login');
    //         }
    //     } else {
    //         $session->setFlashdata('msg', 'Email not Found');
    //         return redirect()->to('/login');
    //     }
    // }

    // public function logout()
    // {
    //     $session = session();
    //     $session->destroy();
    //     return redirect()->to('/login');
    // }



}
