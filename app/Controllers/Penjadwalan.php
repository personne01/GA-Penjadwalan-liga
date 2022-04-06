<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Penjadwalan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard || Penjadwalan'
        ];
        return view('dashboard/penjadwalan', $data);
    }
}
