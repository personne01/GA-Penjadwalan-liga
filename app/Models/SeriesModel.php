<?php

namespace App\Models;

use CodeIgniter\Model;

class SeriesModel extends Model
{
    protected $table = 'series';
    protected $primaryKey = 'id_series';
    protected $allowedFields = ['id_series', 'tempat', 'tanggal'];

    public function getSeries($id_series = false)
    {
        if ($id_series == false) {
            return $this->findAll();
        }
        return $this->where(['id_series' => $id_series])->first();
    }
}
