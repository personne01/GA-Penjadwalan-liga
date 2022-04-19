<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $session = session();
    }
    public function index()
    {

        $data = [
            'title' => 'Dashboard | Admin'
        ];

        return view('dashboard/index', $data);
    }
}
