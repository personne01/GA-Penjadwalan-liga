<?php

namespace App\Models;

use CodeIgniter\Model;

class SeriesModel extends Model
{
    protected $table = 'series';
    protected $primaryKey = 'id_series';
    protected $useTimestamps = true;

    public function getSeries()
    {
        return $this->db->table('series')->get()->getResultArray();
    }
}
