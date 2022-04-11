<?php

namespace App\Models;

use CodeIgniter\Model;
use SebastianBergmann\CodeUnit\FunctionUnit;

class Log_aktivitasModel extends Model
{
    protected $table = "log";
    protected $primaryKey = "id_log";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['id_log', 'level', 'aktivitas', 'deskripsi', 'waktu'];
}
