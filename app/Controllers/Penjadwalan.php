<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TimModel;

class Penjadwalan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard || Penjadwalan'
        ];
        return view('dashboard/penjadwalan', $data);
    }

    protected $timModel;
    public function __construct()
    {
        $this->timModel = new TimModel();
    }
}
