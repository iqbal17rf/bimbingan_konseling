<?php

namespace App\Models;

use CodeIgniter\Model;
use SebastianBergmann\CodeUnit\FunctionUnit;

class GuideModel extends Model
{
    protected $table = "tb_guide";
    protected $primaryKey = "id_guide";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['id_guide', 'user_guide', 'deskripsi'];
}
