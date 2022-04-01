<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Admin'
        ];

        return view('dashboard/index', $data);
    }
    public function tim()
    {
        $data = [
            'title' => 'Tim | Admin'
        ];

        return view('/dashboard/tim', $data);
    }
    public function series()
    {
        $data = [
            'title' => 'Series | Admin'
        ];

        return view('/dashboard/series', $data);
    }
    public function jam()
    {
        $data = [
            'title' => 'Series | Jam'
        ];

        return view('/dashboard/jam', $data);
    }
    public function users()
    {
        $data = [
            'title' => 'Series | Users'
        ];

        return view('/dashboard/users', $data);
    }
    public function layoutNative()
    {
        return view('dashboard/layout-native');
    }
}
