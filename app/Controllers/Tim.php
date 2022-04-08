<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TimModel;

class Tim extends BaseController
{
    protected $timModel;
    public function __construct()
    {
        $this->timModel = new TimModel();
    }
    public function index()
    {
        $tim = $this->timModel->findAll();
        $data = [
            'title' => 'Users',
            'tim' => $tim
        ];
        return view('dashboard/tim', $data);
    }
}
