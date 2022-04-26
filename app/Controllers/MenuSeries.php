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
    public function edit($id_series)
    {
        $data = [
            'title' => 'ubah data series',
            'validation' => \Config\Services::validation(),
            'series' => $this->seriesModel->getSeries($id_series)
        ];
        return view('admin/menuSeries_edit', $data);
    }
    public function update($id_series)
    {
        $data = $this->request->getVar();
        $this->seriesModel->save([
            'id_series' => $id_series,
            'tempat' => $data['tempat'],
            'tanggal' => $data['tanggal']
        ]);

        session()->setFlashdata('tambah', 'Data berhasil diubah');
        return redirect()->to('/admin/menuSeries');
    }
}
