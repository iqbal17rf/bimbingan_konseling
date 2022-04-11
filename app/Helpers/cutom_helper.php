<?php

function akunBk()
{
    $db = \config\Database::connect();
    return $db->table('user')->where('id_user', '3')->get()->getRow();
}
//profile perusahaan
function profile()
{
    $db = \config\Database::connect();
    return $db->table('profile_p')->where('email', session('email'))->get()->getRow();
}
//akun pelamar 
function akunsiswa()
{
    $db = \config\Database::connect();
    return $db->table('user')->where('email', session('email'))->get()->getRow();
}
function profilepelamar()
{
    $db = \config\Database::connect();

    return $db->table('profile_pelamar')->where('email', session('email'))->get()->getRow();
}
