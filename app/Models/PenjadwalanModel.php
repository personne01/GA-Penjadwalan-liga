<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjadwalanModel extends Model
{
    protected $table = 'penjadwalan';
    protected $primaryKey = 'id_penjadwalan';
    protected $allowedFields = ['match_tim', 'id_series', 'tempat', 'id_jam'];
    protected $useTimestamps = true;

    public function getPenjadwalan()
    {
        return $this->db->table('penjadwalan')
            ->join('series', 'series.id_series = penjadwalan.id_series')
            ->join('jam', 'jam.id_jam = penjadwalan.id_jam')
            ->join('tim', 'tim.id_tim = penjadwalan.timA')
            ->get()->getResultArray();
    }
}
