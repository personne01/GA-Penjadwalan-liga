<?php

namespace App\Models;

use CodeIgniter\Model;

class TimModel extends Model
{
    protected $table = 'tim';
    protected $primaryKey = 'id_tim';
    protected $useTimestamps = true;

    public function getTim()
    {
        return $this->db->table('tim')->get()->getResultArray();
    }
}
