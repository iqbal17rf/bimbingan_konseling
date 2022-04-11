<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    public function get_data($hp, $password)
    {
        return $this->db->table('guru_bk')
            ->where(array('no_hp' => $hp, 'password' => $password))
            ->get()->getRowArray();
    }

    protected $table = "guru_bk";
    protected $primaryKey = "nip_bk";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['nip_bk', 'nama', 'email', 'no_hp', 'alamat', 'img'];

    //--------------------------------------------------------------------

}
