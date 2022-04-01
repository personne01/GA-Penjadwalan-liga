<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $useTimestamps = true;

    public function getUSer()
    {
        return $this->db->table('user')->get()->getResultArray();
    }
}