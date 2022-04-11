<?php

namespace App\Models;

use CodeIgniter\Model;

class Tb_wakelModel extends Model
{
    protected $table = "guru_wakel";
    protected $primaryKey = "nip_guru";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['nip_guru', 'nama', 'email', 'no_hp', 'wakel', 'alamat', 'no_hp'];

    public function deletewalas($nip_wakel)
    {
        $builder = $this->db->table($this->guru_wakel);
        return $builder->delete(['nip_wakel' => $nip_wakel]);
    }

    public function simpan_gambar($data)
    {
        $query = $this->db->table($this->table)->insert($data);

        return $query;
    }
}
