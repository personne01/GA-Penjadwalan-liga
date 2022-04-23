<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SeriesModel;

class MenuSeries extends BaseController
{
    protected $seriesModel;
    public function __construct()
    {
        $this->session = session();
        $this->seriesModel = new SeriesModel();
    }
    public function index()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        if ($this->session->get('level_user') != 1) {
            return redirect()->to('/admin/menuSeries');
        }
        $series = $this->seriesModel->where('grup', 'a')
            ->findAll();
        $data = [
            'title' => 'Dashboard || Series Grup A',
            'series' => $series
        ];
        return view('admin/menuSeries', $data);
    }
    public function seriesB()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        if ($this->session->get('level_user') != 1) {
            return redirect()->to('/admin/menuSeriesB');
        }

        $series = $this->seriesModel->where('grup', 'b')
            ->findAll();
        $data = [
            'title' => 'Dashboard || Series Grup B',
            'series' => $series
        ];
        return view('admin/menuSeries', $data);
    }
}
