<?php

namespace App\Models;

use CodeIgniter\Model;

class PertandinganModel extends Model
{
    protected $table = 'pertandingan';
    protected $primaryKey = 'id_pertandingan';
    protected $allowedFields = ['id_pertandingan', 'timA', 'timB', 'id_series', 'tanggal', 'id_jam', 'jam_mulai', 'jam_Selesai', 'random'];

    public function getPertandingan($id_pertandingan = false)
    {
        if ($id_pertandingan == false) {
            return $this->findAll();
        }
        return $this->where(['pertandingan' => $id_pertandingan])->first();
    }
}
