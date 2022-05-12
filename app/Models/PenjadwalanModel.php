<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjadwalanModel extends Model
{
    protected $table = 'penjadwalan';
    protected $primaryKey = 'id_penjadwalan';
    protected $allowedFields = ['id_penjadwalan', 'timA', 'timB', 'id_series', 'tanggal', 'id_jam', 'jam_mulai', 'jam_selesai'];

    public function getPenjadwalan($id_penjadwalan = false)
    {
        if ($id_penjadwalan == false) {
            return $this->findAll();
        }
        return $this->where(['penjadwalan' => $id_penjadwalan])->first();
    }
    // public function getPenjadwalan($id_penjadwalan)
    // {
    //     return $this->db->table('penjadwalan')
    //         ->join('series', 'series.id_series = penjadwalan.id_series')
    //         ->join('jam', 'jam.id_jam = penjadwalan.id_jam')
    //         ->join('tim', 'tim.id_tim = penjadwalan.timA')
    //         ->get()->getResultArray();
    //     return $this->where(['id_penjadwalan' => $id_penjadwalan])->first();
    // }

}
