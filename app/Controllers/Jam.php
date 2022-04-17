<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JamModel;

class Jam extends BaseController
{
    protected $jamModel;
    public function __construct()
    {
        $this->jamModel = new JamModel();
    }
    public function index()
    {
        $jam = $this->jamModel->findAll();
        $data = [
            'title' => 'Jam',
            'jam' => $jam
        ];

        return view('dashboard/jam', $data);
    }
}
