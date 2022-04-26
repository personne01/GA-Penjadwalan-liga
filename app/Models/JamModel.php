<?php

namespace App\Models;

use CodeIgniter\Model;

class JamModel extends Model
{
    protected $table = 'jam';
    protected $primaryKey = 'id_jam';
    protected $allowedFields = ['id_jam', 'jam_mulai', 'jam_selesai'];


    public function getJam($id_jam = false)
    {
        if ($id_jam == false) {
            return $this->findAll();
        }
        return $this->where(['id_jam' => $id_jam])->first();
    }
}
