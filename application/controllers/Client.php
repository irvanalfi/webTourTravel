<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cetak_m');
        $this->load->model('Blog_m');
        $this->load->model(['Item_m', 'category_m', 'type_m']);
        $this->load->helper('text');
    }

    public function home()
    {
        $data['row'] = $this->Item_m->get();
        $this->template->load('template_c', 'client/home', $data);
    }

    public function java()
    {
        $data['row'] = $this->Item_m->get();
        $this->template->load('template_c', 'client/java', $data);
    }

    public function bali()
    {
        $data['row'] = $this->Item_m->get();
        $this->template->load('template_c', 'client/bali', $data);
    }

    public function lombok()
    {
        $data['row'] = $this->Item_m->get();
        $this->template->load('template_c', 'client/lombok', $data);
    }

    public function blog()
    {
        $data['row'] = $this->Blog_m->get();
        $this->template->load('template_c', 'client/blog', $data);
    }

    public function privacyPolicy()
    {
        $this->template->load('template_c', 'client/privacy_policy');
    }

    public function termsAndCondition()
    {
        $this->template->load('template_c', 'client/terms_and_condition');
    }
    
    
}

/* End of file Controllername.php */
