<?php

namespace App\Controllers;

use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

use App\Models\Tb_siswaModel;

class Siswa extends BaseController
{
    protected $siswaModel;

    public function __construct()
    {
        $this->siswaModel = new Tb_siswaModel();
    }

    public function index()
    {
        $siswa = $this->siswaModel->findAll();

        $data = [
            'tittle' => 'Data Siswa'
        ];

        return view('/pages/siswa', $data);
    }
}
