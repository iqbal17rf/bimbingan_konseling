<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table     = 'user';
    protected $primaryKey     = 'id_user';
    protected $returnType     = 'object';
    protected $allowedFields     = [
        'nama',
        'email',
        'password',
        'level'
    ];

    public function getAllData()
    {
        return $this->db->table('user')->get();
    }
    public function totalLogin()
    {
        return $this->db->table('user')->countAllResults();
    }
}
