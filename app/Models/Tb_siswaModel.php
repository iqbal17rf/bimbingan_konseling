<?php

namespace App\Models;

use CodeIgniter\Model;
use SebastianBergmann\CodeUnit\FunctionUnit;

class Tb_siswaModel extends Model
{
    protected $table = "tb_siswa";
    protected $primaryKey = "nis";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['nis', 'id_kelas', 'nama', 'tmpt_lahir', 'tnggl_lahir', 'email', 'jenis_kelamin', 'agama', 'no_hp', 'alamat', 'img'];

    public function deleteSiswa($nis)
    {
        $builder = $this->db->table($this->tb_siswa);
        return $builder->delete(['nis' => $nis]);
    }
}
