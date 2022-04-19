<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TimModel;

class Tim extends BaseController
{
    protected $timModel;
    public function __construct()
    {
        $session = session();
        $this->timModel = new TimModel();
    }
    public function index()
    {
        session()->start();
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
    public function edit($id_tim)
    {

        $data = [
            'title' => 'ubah data komik',
            'validation' => \Config\Services::validation(),
            'tim' => $this->timModel->getTim($id_tim)
        ];
        return view('dashboard/timEdit', $data);
    }
    public function update()
    {
    }
}
