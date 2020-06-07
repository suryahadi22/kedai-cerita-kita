<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
    }

    public function index()
    {
        $data['content'] = $this->load->view('dashboard/content/dashboard', null, true);
        $this->load->view('dashboard/layouts', $data);
    }
}