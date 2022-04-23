<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Validation\Rules;

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
        $data = [
            'title' => 'Admin - Daftar User',
            'users' => $this->userModel->paginate(10),
            'pager' => $this->userModel->pager
        ];
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        if ($this->session->get('level_user') != 1) {
            return redirect()->to('/admin/menuUser');
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

    public function create()
    {
        session();
        helper(['form']);
        $data = [
            'title' => 'admin || Tambah User',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/menuUser_add', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'is_unique' => 'Masukkan {field} lain. username sudah terdaftar'
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
            return redirect()->to('/admin/addUser')->withInput()->with('validation', $validation);
        }

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
        session()->setFlashdata('tambah', 'Data berhasil ditambahkan');
        return redirect()->to('/admin/menuUser');
    }
    public function delete($id_user)
    {
        $this->userModel->delete($id_user);
        return redirect()->to('/menuUser/index');
    }

    public function edit($id_user)
    {

        $data = [
            'title' => 'Form Ubah Data User',
            'validation' => \Config\Services::validation(),
            'users' => $this->userModel->getUser($id_user)
        ];
        return view('admin/menuUser_edit', $data);
    }
    public function update($id_user)
    {
        $data = $this->request->getVar();

        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'is_unique' => 'Anda tidak merubah apapun selain password.'
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
            return redirect()->to('admin/editUser/' . $id_user)->withInput()->with('validation', $validation);
        }


        $salt = uniqid('', true);

        //hash password digabung dengan salt
        $password = md5($data['password']) . $salt;
        //masukan data ke database
        $this->userModel->save([
            'id_user' => $id_user,
            'username' => $data['username'],
            'password' => $password,
            'salt' => $salt,
            'level_user' => 2
        ]);

        session()->setFlashdata('tambah', 'Data berhasil diubah');
        return redirect()->to('/admin/menuUser');
    }
}
