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
        $penjadwalan = $this->penjadwalanModel->getPenjadwalan();
        $data = [
            'title' => 'Dashboard || Penjadwalan',
            'penjadwalan' => $penjadwalan,
            'tim' => $this->timModel,
            'pert' => null
        ];
        return view('admin/menuPenjadwalan', $data);
    }
    public function generate()
    {
        for ($i = 1; $i <= 8; $i++) {
            for ($j = 1; $j <= 4; $j++) {
                $a = null;
                $b = null;
                while ($a == $b) {

                    $a = $this->timModel->where('id_tim', rand(1, 8))->getTim();
                    $b = $this->timModel->where('id_tim', rand(1, 8))->getTim();
                }

                $pert[$i][$j] = [
                    'a' => $a,
                    'b' => $b,
                    'series' => $this->seriesModel->where('id_series', $i)->getSeries(),
                    'jam' => $this->jamModel->where('id_jam', $j)->getJam()
                ];
            }
        }
        $data = [
            'pert' => $pert,
            'title' => 'Coba Lagi'
        ];
        return view('admin/penjadwalanGenerate', $data);
    }
}
