<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\User();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        return redirect()->to(site_url('login'));
    }

    public function login()
    {
        return view('pages/login');
    }

    public function auth()
    {
        $post = $this->request->getPost();
        $query = $this->db->table('user')->getWhere(['email' => $post['email']]);
        $user = $query->getRow();


        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $cek_data = $this->userModel->where("email", $email)->first();

        //jika data ditemukan
        if ($cek_data) {
            //seleksi
            if ($cek_data->level == 1) {
                //masuk halaman admin
                return redirect()->to(site_url("pages/dashboard"));
            } elseif ($cek_data->level == 2) {
                //halaman pelamar
                $params = ['email' => $user->email];
                session()->set($params);
                return redirect()->to(site_url("pages/siswaa/"));
            } elseif ($cek_data->level == 3) {
                //halaman perusahaan
                $params = ['email' => $user->email, 'id_user' => $user->id_user];
                session()->set($params);
                return redirect()->to(site_url("pages/wakell"));
            }
        } else {
            echo "data tidak ditemukan";
        }
    }
}
