<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->load->model('Barang_model', 'barang');
    }

    public function index()
    {
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
            $this->form_validation->set_rules('stok_barang', 'Stok Barang', 'required');
            $this->form_validation->set_message('required', '%s wajib diisi');

            if ($this->form_validation->run() == true) {
                $data = array(
                    'nama_barang' => $this->input->post('nama_barang'),
                    'stok_barang' => $this->input->post('stok_barang'),
                    'dibuat_pada' => date('Y-m-d H:i:s'),
                    'diupdate_pada' => date('Y-m-d H:i:s')
                );

                $query = $this->barang->insert($data);
                if ($query) {
                    $message = 'Berhasil ditambahkan';
                    $this->session->set_flashdata('message', 'Berhasil Ditambahkan');
                    redirect('input');
                } else {
                    $message = 'Gagal ditambahkan';
                    $this->session->set_flashdata('message', 'Gagal Ditambahkan');
                    redirect('input');
                }
            }
        }

        $data['content'] = $this->load->view('dashboard/content/input', null, true);
        $this->load->view('dashboard/layouts', $data);
    }
}