<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Guide extends BaseController
{
    public $db;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function user_guide()
    {
        $data = $this->db->table("tb_guide")->get()->getResult();
        return view('user_guide', [
            "iklans" => $data
        ]);
    }

    function generatePDF()
    {
        $dompdf = new \Dompdf\Dompdf();
        $data = $this->db->table("tb_guide")->get()->getResult(); //data dari tabel iklan

        $dompdf->loadHtml(view('pdf/template-iklan', ["iklans" => $data]));
        $dompdf->setPaper('A4', 'portrait'); //ukuran kertas dan orientasi
        $dompdf->render();
        $dompdf->stream("laporan-iklan"); //nama file pdf

        return redirect()->to(base_url('list-iklan')); //arahkan ke list-iklan setelah laporan di unduh
    }
}
