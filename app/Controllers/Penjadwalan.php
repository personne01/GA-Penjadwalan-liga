<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TimModel;

class Penjadwalan extends BaseController
{
    protected $timModel;
    public function __construct()
    {
        $session = session();

        $this->timModel = new TimModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Dashboard || Penjadwalan'
        ];
        return view('dashboard/penjadwalan', $data);
    }
}
