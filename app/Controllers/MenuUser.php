<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\HTTP\RequestInterface;

class MenuUser extends BaseController
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
    protected $userModel;
    public function __construct()
    {
        $this->session = session();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $model = new UserModel();
        $data = [
            'title' => 'Admin - Daftar User',
            'users' => $model->paginate(10),
            'pager' => $model->pager
        ];
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        if ($this->session->get('level_user') != 1) {
            return redirect()->to('/admin');
        }

        return view('admin/menuUser', $data);
    }
    public function list()
    {
        $model = new UserModel();
        $request = \Config\Services::request();
        $id = $request->getVar('term');
        $user = $model->like('id_user', $id)->findAll();
        $w = array();
        foreach ($user as $rt) :
            $w[] = [
                "label" => $rt['id_user'],
                "username" => $rt['username'],
            ];

        endforeach;
        // echo json_encode($w);
        dd($w);
    }

    public function detail($id_user)
    {
        $detailUser = $this->userModel->find($id_user);
        dd($detailUser);
    }
    public function create()
    {
        helper(['form']);
        $data = [
            'title' => 'admin || Tambah User'
        ];
        return view('admin/menuUser_add', $data);
    }
    public function save()
    {

        $data = $this->request->getPost();
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
        return redirect()->to('admin/menuUser');
    }
}
