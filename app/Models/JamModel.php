<?php

namespace App\Models;

use CodeIgniter\Model;

class JamModel extends Model
{
    protected $table = 'jam';
    protected $primaryKey = 'id_jam';
    protected $useTimestamps = true;

    public function getJam()
    {
        return $this->db->table('jam')->get()->getResultArray();
    }
}
