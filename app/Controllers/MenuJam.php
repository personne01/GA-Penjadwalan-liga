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
}
