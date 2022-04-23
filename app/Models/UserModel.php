<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = "id_user";
    protected $allowedFields = ['username', 'password', "salt", "level_user"];
    protected $userTimestamps = false;

    public function getUSer($id_user = false)
    {
        if ($id_user == false) {
            return $this->findAll();
        }
        return $this->where(['id_user' => $id_user])->first();
    }
}
