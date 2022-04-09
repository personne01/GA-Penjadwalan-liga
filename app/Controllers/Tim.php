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
        $tim = $this->timModel->where('grup', 'a')
            ->findAll();;
        $data = [
            'title' => 'Dashboard || Tim A',
            'tim' => $tim
        ];
        return view('dashboard/tim', $data);
    }
    public function timB()
    {
        $tim = $this->timModel->where('grup', 'b')
            ->findAll();
        $data = [
            'title' => 'Dashboard || Tim B',
            'tim' => $tim
        ];
        return view('dashboard/tim', $data);
    }
}
