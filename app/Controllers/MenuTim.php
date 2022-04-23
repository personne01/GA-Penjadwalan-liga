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
            'title' => 'ubah data komik',
            'validation' => \Config\Services::validation(),
            'tim' => $this->timModel->getTim($id_tim)
        ];
        return view('admin/menuTim', $data);
    }
    public function update()
    {
    }
}
