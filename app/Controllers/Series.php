<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SeriesModel;

class Series extends BaseController
{
    protected $seriesModel;
    public function __construct()
    {
        $this->seriesModel = new SeriesModel();
    }
    public function index()
    {
        $series = $this->seriesModel->where('grup', 'a')
            ->findAll();
        $data = [
            'title' => 'Dashboard || Series Grup A',
            'series' => $series
        ];
        return view('dashboard/series', $data);
    }
    public function seriesB()
    {
        $series = $this->seriesModel->where('grup', 'b')
            ->findAll();
        $data = [
            'title' => 'Dashboard || Series Grup B',
            'series' => $series
        ];
        return view('dashboard/series', $data);
    }
}
