<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenjadwalanModel;
use App\Models\PertandinganModel;
use App\Models\SeriesModel;
use App\Models\JamModel;
use App\Models\TimModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class MenuPenjadwalan extends BaseController
{
    // protected $penjadwalanModel;
    // public function __construct()
    // {
    //     $this->session = session();

    //     $this->penjadwalanModel = new PenjadwalanModel();
    //     $this->seriesModel = new SeriesModel();
    //     $this->timModel = new TimModel();
    //     $this->jamModel = new JamModel();
    // }


    // public function index()
    // {

    // if (!$this->session->has('isLogin')) {
    //     return redirect()->to('/auth/login');
    // }

    // if ($this->session->get('level_user') != 1) {
    //     return redirect()->to('/admin/menuPenjadwalan');
    // }
    // $penjadwalan = $this->penjadwalanModel->findAll();
    // $data = [
    //     'title' => 'Dashboard || Penjadwalan',
    //     'penjadwalan' => $penjadwalan
    // ];
    // return view('admin/menuPenjadwalan', $data);
    // }
    // public function generate()
    // {
    //     for ($i = 1; $i <= 7; $i++) {
    //         for ($j = 1; $j <= 4; $j++) {
    //             $a = null;
    //             $b = null;
    //             while ($a == $b) {

    //                 $a = $this->timModel->where('id_tim', rand(1, 8))->getTim();
    //                 $b = $this->timModel->where('id_tim', rand(1, 8))->getTim();
    //             }

    //             $pert[$i][$j] = [
    //                 'a' => $a,
    //                 'b' => $b,
    //                 'series' => $this->seriesModel->where('id_series', $i)->getSeries(),
    //                 'jam' => $this->jamModel->where('id_jam', $j)->getJam()
    //             ];
    //         }
    //     }
    //     for ($i = 1; $i <= 7; $i++) {
    //         $k = 1;
    //         for ($j = 1; $j <= 4; $j++) {
    //             $this->penjadwalanModel->where('id_penjadwalan', $k)->save([
    //                 'timA' => $pert[$i][$j]['a'][0]['nama_tim'],
    //                 'timB' => $pert[$i][$j]['b'][0]['nama_tim'],
    //                 'id_series' => $pert[$i][$j]['series'][0]['id_series'],
    //                 'id_jam' => $pert[$i][$j]['jam'][0]['id_jam'],
    //             ]);
    //             $k++;
    //         }
    //     }
    //     // $this->userModel->save([
    //     //     'id_penjadwalan' => ,
    //     //     'username' => $data['username'],
    //     //     'password' => $password,
    //     //     'salt' => $salt,
    //     //     'level_user' => 2
    //     // ]);
    //     $data = [
    //         'pert' => $pert,
    //         'title' => 'Coba Lagi'
    //     ];
    //     return view('admin/penjadwalanGenerate', $data);
    // }


    protected $penjadwalanModel;
    protected $pertandinganModel;
    public function __construct()
    {
        $this->session = session();

        $this->penjadwalanModel = new PenjadwalanModel();
        $this->pertandinganModel = new PertandinganModel();
        // $this->seriesModel = new SeriesModel();
        // $this->timModel = new TimModel();
        // $this->jamModel = new JamModel();
    }

    public function index()
    {

        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        if ($this->session->get('level_user') != 1) {
            return redirect()->to('/admin/menuPenjadwalan');
        }
        $penjadwalan = $this->penjadwalanModel->findAll();
        $data = [
            'title' => 'Dashboard || Penjadwalan',
            'penjadwalan' => $penjadwalan
        ];

        return view('admin/menuPenjadwalan', $data);
    }

    public function generate()
    {

        $random_picker = rand(1, 8);
        $pertandingan = $this->pertandinganModel->where('random', $random_picker)->findAll();
        $this->penjadwalanModel->truncate('penjadwalan');
        for ($i = 0; $i < 28; $i++) {
            $this->penjadwalanModel->insert([
                'id_penjadwalan' => $pertandingan[$i]['id_pertandingan'],
                'timA' => $pertandingan[$i]['timA'],
                'timB' => $pertandingan[$i]['timB'],
                'id_series' => $pertandingan[$i]['id_series'],
                'tanggal' => $pertandingan[$i]['tanggal'],
                'id_jam' => $pertandingan[$i]['id_jam'],
                'jam_mulai' => $pertandingan[$i]['jam_mulai'],
                'jam_selesai' => $pertandingan[$i]['jam_selesai']
            ]);
        }

        session()->setFlashdata('generate', 'jadwal berhasil dibangkitkan dan disimpan');
        return redirect()->to('admin/menuPenjadwalan');
    }

    public function export()
    {
        $penjadwalanModel = new PenjadwalanModel();
        $penjadwalan = $penjadwalanModel->findAll();

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'tanggal')
            ->setCellValue('B1', 'timA')
            ->setCellValue('C1', 'TimB')
            ->setCellValue('D1', 'id_series')
            ->setCellValue('E1', 'id_jam')
            ->setCellValue('F1', 'jam_mulai')
            ->setCellValue('F1', 'jam_selesai');

        $column = 2;

        foreach ($penjadwalan as $jadwal) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $jadwal['tanggal'])
                ->setCellValue('B' . $column, $jadwal['timA'])
                ->setCellValue('C' . $column, $jadwal['timB'])
                ->setCellValue('D' . $column, $jadwal['id_series'])
                ->setCellValue('E' . $column, $jadwal['id_jam'])
                ->setCellValue('F' . $column, $jadwal['jam_mulai'])
                ->setCellValue('G' . $column, $jadwal['jam_selesai']);

            $column++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = date('Y-m-d-His') . '-Data-Penjadwalan';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $filename . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
    public function delete()
    {
        $this->penjadwalanModel->truncate('penjadwalan');
        session()->setFlashdata('hapus', 'data pertandingan dihapus');
        return redirect()->to('admin/menuPenjadwalan');
    }
}
