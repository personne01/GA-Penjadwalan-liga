<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    public function cek_login($user_desa, $password)
    {
        return $this->db->table('tbl_user')
            ->where(array('user_desa' => $user_desa, 'password' => $password))
            ->get()->getRowArray();
    }
}
