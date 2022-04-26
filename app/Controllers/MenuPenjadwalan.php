<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenjadwalanModel;
use App\Models\SeriesModel;
use App\Models\JamModel;
use App\Models\TimModel;

class MenuPenjadwalan extends BaseController
{
    protected $penjadwalanModel;
    public function __construct()
    {
        $this->session = session();

        $this->penjadwalanModel = new PenjadwalanModel();
        $this->seriesModel = new SeriesModel();
        $this->timModel = new TimModel();
        $this->jamModel = new JamModel();
    }


    public function index()
    {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        if ($this->session->get('level_user') != 1) {
            return redirect()->to('/admin/menuPenjadwalan');
        }
        dd($penjadwalan = $this->penjadwalanModel->getPenjadwalan());

        $data = [
            'title' => 'Dashboard || Penjadwalan',
            'penjadwalan' => $penjadwalan,
            'tim' => $this->timModel
        ];
        // return view('admin/menuPenjadwalan', $data);
    }
}
