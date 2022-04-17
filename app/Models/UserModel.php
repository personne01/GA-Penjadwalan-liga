<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $table = 'users';
    protected $primaryKey = "id_user";
    protected $allowedFields = ['user_name', 'user_email', 'user_password', 'user_created_at'];
    protected $userTimestamps = false;

    public function getUSer()
    {
        return $this->db->table('user')->get()->getResultArray();
    }
}
