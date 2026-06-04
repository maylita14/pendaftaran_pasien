<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function login()
{
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    // CEK ADMIN
    $admin = $this->db->get_where('tb_admin', [
        'username' => $username,
        'password' => $password
    ])->row();

    if($admin){

        $this->session->set_userdata([
            'id_admin' => $admin->id_admin,
            'username' => $admin->username,
            'role' => 'admin',
            'login' => TRUE
        ]);

        redirect('dashboard');
    }

    // CEK PASIEN
    $pasien = $this->db->get_where('tb_pasien', [
        'username' => $username,
        'password' => $password
    ])->row();

    if($pasien){

        $this->session->set_userdata([
            'id_pasien' => $pasien->id_pasien,
            'nama' => $pasien->nama,
            'username' => $pasien->username,
            'role' => 'pasien',
            'login' => TRUE
        ]);

        redirect('frontend');
    }

    $this->session->set_flashdata(
        'error',
        'Username atau Password salah'
    );

    redirect('auth');
}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}