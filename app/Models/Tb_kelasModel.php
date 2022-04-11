<?php

namespace App\Models;

use CodeIgniter\Model;
use SebastianBergmann\CodeUnit\FunctionUnit;

class Tb_kelasModel extends Model
{
    protected $table = "tb_kelas";
    protected $primaryKey = "id_kelas";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['id_kelas', 'kelas'];
}
