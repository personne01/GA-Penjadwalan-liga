<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenjadwalanModel;
use App\Models\SeriesModel;
use App\Models\JamModel;
use App\Models\TimModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
        for ($i = 1; $i <= 7; $i++) {
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
        for ($i = 1; $i <= 7; $i++) {
            for ($j = 1; $j <= 4; $j++) {
                $this->penjadwalanModel->save([
                    'timA' => $pert[$i][$j]['a'][0]['nama_tim'],
                    'timB' => $pert[$i][$j]['b'][0]['nama_tim'],
                    'id_series' => $pert[$i][$j]['series'][0]['id_series'],
                    'id_jam' => $pert[$i][$j]['jam'][0]['id_jam'],
                ]);
            }
        }
        // $this->userModel->save([
        //     'id_penjadwalan' => ,
        //     'username' => $data['username'],
        //     'password' => $password,
        //     'salt' => $salt,
        //     'level_user' => 2
        // ]);
        $data = [
            'pert' => $pert,
            'title' => 'Coba Lagi'
        ];
        return view('admin/penjadwalanGenerate', $data);
    }

    public function export()
    {
        $penjadwalanModel = new PenjadwalanModel();
        $penjadwalan = $penjadwalanModel->findAll();

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'id_penjadwalan')
            ->setCellValue('B1', 'timA')
            ->setCellValue('C1', 'TimB')
            ->setCellValue('D1', 'id_series')
            ->setCellValue('E1', 'id_jam');

        $column = 2;

        foreach ($penjadwalan as $jadwal) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $jadwal['id_penjadwalan'])
                ->setCellValue('B' . $column, $jadwal['timA'])
                ->setCellValue('C' . $column, $jadwal['timB'])
                ->setCellValue('D' . $column, $jadwal['id_series'])
                ->setCellValue('E' . $column, $jadwal['id_jam']);

            $column++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = date('Y-m-d-His') . '-Data-Penjadwalan';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $filename . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
