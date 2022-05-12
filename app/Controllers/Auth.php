<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        //membuat user model untuk konek ke database 
        $this->userModel = new UserModel();

        //meload validation
        $this->validation = \Config\Services::validation();

        //meload session
        $this->session = session();
    }

    public function login()
    {
        $data = [
            'title' => "Login"
        ];
        //menampilkan halaman login
        return view('auth/login', $data);
    }

    public function register()
    {
        session();
        helper(['form']);
        $data = [
            'title' => "Register",
            'validation' => \Config\Services::validation()
        ];
        //menampilkan halaman register
        return view('auth/register', $data);
    }

    public function valid_register()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'is_unique' => 'Username yang anda masukkan sudah dipakai'
                ]
            ],

            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'min_length' => '{field} yang anda inputkan kurang dari 8 karakter.'
                ]
            ],
            'passconf' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi password tidak cocok.'
                ]
            ]
        ])) {

            $validation = \Config\Services::validation();
            return redirect()->to('auth/register')->withInput()->with('validation', $validation);
        }
        //tangkap data dari form 
        $data = $this->request->getPost();

        //jalankan validasi
        $this->validation->run($data, 'register');

        //cek errornya
        $errors = $this->validation->getErrors();

        //jika ada error kembalikan ke halaman register
        if ($errors) {
            session()->setFlashdata('error', $errors);
            return redirect()->to('/auth/register');
        }

        //jika tdk ada error 

        //buat salt
        $salt = uniqid('', true);

        //hash password digabung dengan salt
        $password = md5($data['password']) . $salt;


        //masukan data ke database
        $this->userModel->save([
            'username' => $data['username'],
            'password' => $password,
            'salt' => $salt,
            'level_user' => 2
        ]);

        //arahkan ke halaman login
        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('auth/login');
    }

    public function valid_login()
    {
        //ambil data dari form
        $data = $this->request->getPost();

        //ambil data user di database yang usernamenya sama 
        $users = $this->userModel->where('username', $data['username'])->first();


        //cek apakah username ditemukan
        if ($users) {
            //cek password
            //jika salah arahkan lagi ke halaman login
            if ($users['password'] != md5($data['password']) . $users['salt']) {
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('/auth/login');
            } else {
                //jika benar, arahkan user masuk ke aplikasi 
                $sessLogin = [
                    'isLogin' => true,
                    'username' => $users['username'],
                    'level_user' => $users['level_user']
                ];
                $this->session->set($sessLogin);

                if ($users['level_user'] == 1) {
                    session()->setFlashdata('username', $users['username']);
                    return redirect()->to('/admin');
                } else if ($users['level_user'] == 2) {
                    session()->setFlashdata('username', $users['username']);
                    return redirect()->to('/user');
                }
            }
        } else {
            //jika username tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('username', 'Username tidak ditemukan');
            return redirect()->to('/auth/login');
        }
    }

    public function logout()
    {
        //hancurkan session 
        //balikan ke halaman login
        $this->session->destroy();
        return redirect()->to('/auth/login');
    }
}
