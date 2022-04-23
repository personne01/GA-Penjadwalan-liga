<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TimModel;

class MenuPenjadwalan extends BaseController
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
            return redirect()->to('/admin/menuPenjadwalan');
        }

        $data = [
            'title' => 'Dashboard || Penjadwalan'
        ];
        return view('admin/menuPenjadwalan', $data);
    }
}
