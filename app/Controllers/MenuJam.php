<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JamModel;

class MenuJam extends BaseController
{
    protected $jamModel;
    public function __construct()
    {
        $this->session = session();
        $this->jamModel = new JamModel();
    }
    public function index()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        if ($this->session->get('level_user') != 1) {
            return redirect()->to('/admin/menuJam');
        }
        $jam = $this->jamModel->findAll();
        $data = [
            'title' => 'Jam',
            'jam' => $jam
        ];

        return view('admin/menuJam', $data);
    }
    public function edit($id_jam)
    {
        $data = [
            'title' => 'ubah data jam',
            'validation' => \Config\Services::validation(),
            'jam' => $this->jamModel->getJam($id_jam)
        ];
        return view('admin/menuJam_edit', $data);
    }
    public function update($id_jam)
    {
        $data = $this->request->getVar();
        $this->jamModel->save([
            'id_jam' => $id_jam,
            'jam_mulai' => $data['jam_mulai'],
            'jam_selesai' => $data['jam_selesai']
        ]);

        session()->setFlashdata('tambah', 'Data berhasil diubah');
        return redirect()->to('/admin/menuJam');
    }
}
