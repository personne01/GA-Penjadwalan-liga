<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TimModel;

class MenuTim extends BaseController
{
    protected $timModel;
    public function __construct()
    {
        $this->session = session();
        $this->timModel = new TimModel();
    }
    public function index()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        if ($this->session->get('level_user') != 1) {
            return redirect()->to('/admin/menuTim');
        }
        $tim = $this->timModel->where('grup', 'a')
            ->findAll();;
        $data = [
            'title' => 'Dashboard || Tim A',
            'tim' => $tim
        ];
        return view('admin/menuTim', $data);
    }
    public function timB()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        if ($this->session->get('level_user') != 1) {
            return redirect()->to('/admin/menuTimB');
        }
        $tim = $this->timModel->where('grup', 'b')
            ->findAll();
        $data = [
            'title' => 'Dashboard || Tim B',
            'tim' => $tim
        ];
        return view('admin/menuTim', $data);
    }
    public function edit($id_tim)
    {

        $data = [
            'title' => 'ubah data tim',
            'validation' => \Config\Services::validation(),
            'tim' => $this->timModel->getTim($id_tim)
        ];
        return view('admin/menuTim_edit', $data);
    }
    public function update($id_tim)
    {
        $data = $this->request->getVar();

        // if (!$this->validate([
        //     'username' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => 'Anda tidak merubah apapun selain password.'
        //         ]
        //     ],

        //     'password' => [
        //         'rules' => 'required|min_length[8]',
        //         'errors' => [
        //             'min_length' => '{field} yang anda inputkan kurang dari 8 karakter.'
        //         ]
        //     ],
        //     'passconf' => [
        //         'rules' => 'required|matches[password]',
        //         'errors' => [
        //             'matches' => 'Konfirmasi password tidak cocok.'
        //         ]
        //     ]
        // ])) {

        //     $validation = \Config\Services::validation();
        //     return redirect()->to('admin/editTim/' . $id_tim)->withInput()->with('validation', $validation);
        // }


        // $salt = uniqid('', true);

        //hash password digabung dengan salt
        // $password = md5($data['password']) . $salt;
        //masukan data ke database
        $this->timModel->save([
            'id_tim' => $id_tim,
            'nama_tim' => $data['nama_tim'],
            'asal_kota' => $data['asal_kota'],
            'pelatih' => $data['pelatih'],
            'created_at' => null,
            'deleted_at' => null

        ]);

        session()->setFlashdata('tambah', 'Data berhasil diubah');
        return redirect()->to('/admin/menuTim');
    }
}
