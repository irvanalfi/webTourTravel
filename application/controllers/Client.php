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
        $this->load->model('Blog_m');
        $data['row'] = $this->Blog_m->get();
        $this->template->load('template_c', 'client/blog', $data);
    }

    public function blog_detail($id)
    {
        $query = $this->Blog_m->get($id);
        if ($query->num_rows() > 0) {
            $blog = $query->row();
            $data = [
                'row' => $blog
            ];
            $this->template->load('template_c', 'client/blog_detail', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "window.location='" . site_url('client/blog') . "'</script>";
        }
    }

    public function privacyPolicy()
    {
        $this->template->load('template_c', 'client/privacy_policy');
    }

    public function termsAndCondition()
    {
        $this->template->load('template_c', 'client/terms_and_condition');
    }

    public function howToBook()
    {
        $this->template->load('template_c', 'client/how_to_book');
    }

    public function chart()
    {
        $this->template->load('template_c', 'client/chart');
    }

    public function about_us()
    {
        $this->load->model('Profile_m');
        $data['row'] = $this->Profile_m->get();
        $this->template->load('template_c', 'client/about_us', $data);
    }
}

/* End of file Controllername.php */
