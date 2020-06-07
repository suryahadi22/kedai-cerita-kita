<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user');
    }

    public function index()
    {
        redirect('auth/login');
    }

    public function cekAkun()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->user->cekAkun($username, $password);
        
        if (!$query) {
            $this->form_validation->set_message('cekAkun', '<div class="alert alert-danger">
                    Username atau Password yang anda masukkan salah
            </div> ');
            return false;
        } else {
            $userData = array(
                'id' => $query->id,
                'username' => $query->username
            );

            $this->session->set_userdata($userData);
            return true;
        }
    }

    public function login()
    {
        if ($this->session->userdata('username')) redirect(base_url());

        if ($this->input->post('submit') == 'login') {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|callback_cekAkun');
            $this->form_validation->set_message('required', '<div class="alert alert-danger">
            %s wajib diisi
            </div> ');

            if ($this->form_validation->run() == true) {
                redirect(base_url());
            }
        }

        $this->load->view('auth/login');
    }
}