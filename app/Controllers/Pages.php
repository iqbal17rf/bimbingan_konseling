<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Tb_siswaModel;
use App\Models\Tb_ortuModel;
use App\Models\Log_aktivitasModel;

class Pages extends BaseController
{

    public function __construct()
    {
        $this->model = new Tb_siswaModel();
    }

    public function beranda()
    {
        $data = [
            'title' => 'Beranda | Bimbingan Konseling'
        ];

        return view('pages/beranda', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login | Bimbingan Konseling'
        ];

        return view('pages/login', $data);
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Data Siswa | Bimbingan Konseling'
        ];

        return view('pages/dashboard', $data);
    }

    public function siswa()
    {
        $siswa = $this->siswaModel->findAll();
        $data = [
            'title' => 'Data Siswa | Bimbingan Konseling',
            'tb_siswa' => $siswa
        ];

        return view('pages/siswa', $data);
    }

    public function kelas()
    {
        $data = [
            'title' => 'Data Kelas | Bimbingan Konseling'
        ];

        return view('pages/kelas', $data);
    }

    public function tambah()
    {
        $kel = $this->kelasModel->get()->getResultArray();
        $data = [
            'title' => 'Import Data | Bimbingan Konseling',
            'kel' => $kel
        ];

        return view('pages/tambah', $data);
    }

    public function wakel()
    {
        $wakel = $this->wakelModel->findAll();
        $data = [
            'title' => 'Data Wali Kelas | Bimbingan Konseling',
            'guru_wakel' => $wakel
        ];

        return view('pages/wakel', $data);
    }

    public function tambah_wakel()
    {
        $data = [
            'title' => 'Import Data | Bimbingan Konseling'
        ];

        return view('pages/tambah_wakel', $data);
    }

    public function tambahProses()
    {

        $this->siswaModel->insert([
            'nis' => $this->request->getVar('nis'),
            'id_kelas' => $this->request->getVar('id_kelas'),
            'nama' => $this->request->getVar('nama'),
            'nama_ortu' => $this->request->getVar('nama_ortu'),
            'tmpt_lahir' => $this->request->getVar('tmpt_lahir'),
            'tnggl_lahir' => $this->request->getVar('tnggl_lahir'),
            'email' => $this->request->getVar('email'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'agama' => $this->request->getVar('agama'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'img' => $this->request->getVar('img')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambah');
        return redirect()->to(site_url('/pages/siswa'));
    }

    public function delete($nis)
    {
        $this->model->delete($nis);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/pages/siswa');
    }

    public function edit($nis)

    {
        $data = [
            'title' => 'Form Ubah Data Siswa',
            'siswa' => $this->model->where('nis', $nis)->get()->getRow()
        ];


        return view('/pages/edit', $data);
    }

    public function update($nis)
    {
        $this->model->save([
            'nis' => $this->request->getVar('nis'),
            'id_kelas' => $this->request->getVar('id_kelas'),
            'nama' => $this->request->getVar('nama'),
            'tmpt_lahir' => $this->request->getVar('tmpt_lahir'),
            'tnggl_lahir' => $this->request->getVar('tnggl_lahir'),
            'email' => $this->request->getVar('email'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'kelas' => $this->request->getVar('agama'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'img' => $this->request->getVar('img')
        ]);


        session()->setFlashdata('pesan', 'Data Berhasil diubah');
        return redirect()->to(site_url('/pages/siswa'));
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/pages/login'));
    }

    public function profil()
    {
        $profil = $this->bkModel->findAll();
        $data = [
            'title' => 'Profil | Bimbingan Konseling',
            'bk' => $profil
        ];

        return view('pages/profil', $data);
    }

    public function tambahWakel()
    {
        $this->wakelModel->save([
            'nip_wakel' => $this->request->getVar('nip_wakel'),
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('no_hp'),
            'wakel' => $this->request->getVar('wakel'),
            'alamat' => $this->request->getVar('alamatimg'),
            'img' => $this->request->getVar('no_hp'),
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambah');
        return redirect()->to(site_url('/pages/wakel'));
    }

    public function deleteWakel($nip_wakel)
    {
        $this->wakelModel->delete($nip_wakel);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/pages/wakel');
    }

    public function siswaa()
    {
        $data = [
            'title' => 'Dashboard | Bimbingan Konseling'
        ];

        return view('/pages/siswaa/dashboard', $data);
    }

    public function wakell()
    {
        $data = [
            'title' => 'Dashboard | Bimbingan Konseling'
        ];

        return view('/pages/wakell/dashboard', $data);
    }

    public function log_aktivitas()
    {
        $log = $this->logModel->findAll();
        $data = [
            'title' => 'Log Aktivitas | Bimbingan Konseling',
            'log' => $log
        ];

        return view('/pages/log_aktivitas', $data);
    }

    public function detail_siswa(string $id)
    {
        // $cek = $this->siswaModel->where('email', session('email'))->get()->getRow();
        // $id = $cek['nis'];
        $detail = $this->siswaModel->where('nis', $id)->get()->getRow();
        $data = [
            'title' => 'Detail Siswa | Bimbingan Konseling',
            'detail' => $detail
        ];

        return view('/pages/detail_siswa', $data);
    }

    public $user;
    public function chat_dashboard()
    {
        $teman = $this->userModel->findAll();
        $data = [
            'title' => 'Chat | Bimbingan Konseling',
            'teman' => $teman
        ];

        return view('/pages/chat_dashboard', $data);
    }
    public function getChats()
    {
        header('Content-Type: application/json');
        if ($this->input->is_ajax_request()) {
            // Find friend
            $friend = $this->db->get_where('user', array('id_user' => $this->input->post('chatWith')), 1)->row();
            // Get Chats
            $chats = $this->db
                ->select('tb_chat.*, users.name')
                ->from('tb_chat')
                ->join('users', 'chat.send_by = user.id_user')
                ->where('(send_by = ' . $this->user->id_user . ' AND send_to = ' . $friend->id_user . ')')
                ->or_where('(send_to = ' . $this->user->id_user . ' AND send_by = ' . $friend->_user . ')')
                ->order_by('chat.time', 'desc')
                ->limit(100)
                ->get()
                ->result();
            $result = array(
                'nama' => $friend->name,
                'chats' => $chats
            );
            echo json_encode($result);
        }
    }
    public function sendMessage()
    {
        $this->db->insert('tb_chat', array(
            'message' => htmlentities($this->input->post('message', true)),
            'send_to' => $this->input->post('chatWith'),
            'send_by' => $this->user->id_user
        ));
    }

    public $db;
    public function user_guide()
    {
        $teman = $this->gModel->findAll();
        $data = [
            'title' => 'Chat | Bimbingan Konseling',
            'iklans' => $teman
        ];

        return view('/pages/user_guide', $data);
    }

    function generatePDF()
    {
        $dompdf = new \Dompdf\Dompdf();
        $data = $this->db->table("tb_guide")->get()->getResult(); //data dari tabel iklan

        $dompdf->loadHtml(view('pdf/template-guide', ["iklans" => $data]));
        $dompdf->setPaper('A4', 'portrait'); //ukuran kertas dan orientasi
        $dompdf->render();
        $dompdf->stream("laporan-guide"); //nama file pdf

        return redirect()->to(base_url('user_guide')); //arahkan ke list-iklan setelah laporan di unduh
    }

    // public function search()
    // {
    //     $this->siswaModel->save([
    //         $pager = \Config\Services::pager();
    //         $model = new Tb_siswaModel();
    //         $kunci = $this ->request->getVar('cari');

    //         if ($kunci){
    //             $query = $model->pencarian($kunci);
    //             $jumlah = "Pencarian dengan nama <B>$kunci</B> ditemukan".$query->affectedRows()."Data";
    //             }
    //             else{
    //                 $query = $model;
    //                 $jumlah = "";                }
    //         }
    //     ])
    // }





    // public function about()
    // {
    //     $data = [
    //         'title' => 'About Me'
    //     ];

    //     return view('pages/about', $data);
    // }

    // public function login()
    // {
    //     $data = [
    //         'title' => 'Login'
    //     ];

    //     return view('pages/login', $data);
    // }
}
