<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->load->model('Barang_model', 'barang');
    }

    public function index()
    {
        $data['barang'] = $this->barang->getAll()->result();
        $data['content'] = $this->load->view('dashboard/content/barang', $data, true);
        $this->load->view('dashboard/layouts', $data);
    }
}