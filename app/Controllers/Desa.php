<?php

namespace App\Controllers;

use App\Models\DesaModel;

class Desa extends BaseController
{
    protected $desaModel;
    public function __construct()
    {
        $this->desaModel = new DesaModel();
    }

    public function index()
    {
        $desa = $this->desaModel->findAll();
        $data = [
            'title' => 'Data Desa | Sivax',
            'desa' => $desa
        ];

        // $db = \config\Database::connect();
        // $desa = $db->query("SELECT * FROM desa");
        // foreach ($desa->getResultArray() as $row) {
        //     d($row);
        // }

        // $desaModel = new \App\Models\DesaModel();


        return view('desa/index', $data);
    }
}
