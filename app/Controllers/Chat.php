<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Chat extends BaseController
{
    public $user;
    public function chat_dashboard()
    {
        $teman = $this->db->where('id_user !=', $this->user->id_user)->get('user');
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
}
