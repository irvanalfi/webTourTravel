<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Cetak_m');
        $this->load->model(['Item_m', 'category_m', 'type_m']);
        $this->load->helper('text');
    }

    public function index()
    {
        $data['row'] = $this->Item_m->get();
        $this->template->load('template_c', 'client/home', $data);
    }
}

/* End of file Controllername.php */
