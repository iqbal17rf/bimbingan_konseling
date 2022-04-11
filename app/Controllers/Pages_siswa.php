<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Tb_siswaModel;
use App\Models\Log_aktivitasModel;

class Pages_siswa extends BaseController
{
    public function __construct()
    {
        $this->model = new Tb_siswaModel();
    }

    public function profil_siswa()
    {
        $id = session('email');
        $siswa = $this->siswaModel->where('email', $id)->get()->getRow();
        $data = [
            'title' => 'Data Siswa | Bimbingan Konseling',
            'tb_siswa' => $siswa
        ];

        return view('pages/siswaa/profil_siswa', $data);
    }
}
