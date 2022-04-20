<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JamModel;

class MenuJam extends BaseController
{
    protected $jamModel;
    public function __construct()
    {
        $this->jamModel = new JamModel();
    }
    public function index()
    {
        $session = session();
        $jam = $this->jamModel->findAll();
        $data = [
            'title' => 'Jam',
            'jam' => $jam
        ];

        return view('admin/menuJam', $data);
    }
}
