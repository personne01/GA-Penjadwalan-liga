<?php

namespace App\Models;

use CodeIgniter\Model;
use PDO;

class TimModel extends Model
{
    protected $table = 'tim';
    protected $primaryKey = 'id_tim';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_tim', 'nama_tim', 'asal_kota', 'pelatih'];
    public function getTim($id_tim = false)
    {
        if ($id_tim == false) {
            if ($id_tim == false) {
                return $this->findAll();
            }
            return $this->where(['id_tim' => $id_tim])->first();
        }
    }
}
