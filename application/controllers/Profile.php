<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('profil_m');
        $this->load->library('form_validation');
        $this->load->model('Cetak_m');
    }

    public function index()
    {
        $data['row'] = $this->profil_m->get();
        $this->template->load('template', 'profil/profil_data', $data);
    }

    public function proses()
    {
        $config['upload_path']      = './assets/img/profil/';
        $config['allowed_types']    = 'gif|jpg|jpeg|png';
        $config['max_size']         = 5120;
        $config['file_name']        = 'profil-' . date('dmy') . '-' . substr(md5(rand()), 0, 10);
        $this->load->library('upload', $config);

        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {
                    $post['image']  =   $this->upload->data('file_name');
                    $this->profil_m->add($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Data has been successfully saved!!');
                    }
                    redirect('profil');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('profil/add');
                }
            } else {
                $post['image']  = null;
                $this->profil_m->add($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data has been successfully saved!!');
                }
                redirect('profil');
            }
        } else if (isset($_POST['edit'])) {
            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {
                    $profil = $this->profil_m->get($post['profil_id'])->row();
                    if ($profil->avatar != null) {
                        $target_file = './assets/img/profil/' . $profil->avatar;
                        unlink($target_file);
                    }
                    $post['image']  =   $this->upload->data('file_name');
                    $this->profil_m->edit($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Data has been successfully saved!!');
                    }
                    redirect('profil');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('profil/edit');
                }
            } else {
                $post['image']  = $post['oldImage'];
                $this->profil_m->edit($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data has been successfully saved!!');
                }
                redirect('profil');
            }
        }
    }

    public function add()
    {
        $profil = new stdClass();
        $profil->profil_id      = null;
        $profil->webName       = null;
        $profil->statusName    = null;
        $profil->about          = null;
        $profil->address1       = null;
        $profil->address2       = null;
        $profil->email1         = null;
        $profil->email2         = null;
        $profil->facebook       = null;
        $profil->instagram      = null;
        $profil->twitter        = null;
        $profil->phone          = null;
        $profil->whatsapp       = null;
        $profil->logo           = null;
        $profil->bannerUtama   = null;
        $profil->bannerUmum    = null;

        $this->form_validation->set_rules('webName', 'WebName', 'required');
        $this->form_validation->set_rules('statusName', 'StatusName', 'required');
        $this->form_validation->set_rules('about', 'About', 'required');
        $this->form_validation->set_rules('address1', 'Address1', 'required');
        $this->form_validation->set_rules('email1', 'Email1', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('whatsapp', 'Whatsapp', 'required');
        $this->form_validation->set_rules('logo', 'Logo', 'required');
        $this->form_validation->set_rules('bannerUtama', 'BannerUtama', 'required');
        $this->form_validation->set_rules('bannerUmum', 'BannerUmum', 'required');

        $this->form_validation->set_message('required', 'The %s has not been filled');

        $data = [
            'page' => 'add',
            'row' => $profil
        ];

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'profil/profil_form', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->profil_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil di Tambahkan')</script>";
            }
            echo "<script>window.location='" . site_url('profil') . "'</script>";
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('webName', 'WebName', 'required');
        $this->form_validation->set_rules('statusName', 'StatusName', 'required');
        $this->form_validation->set_rules('about', 'About', 'required');
        $this->form_validation->set_rules('address1', 'Address1', 'required');
        $this->form_validation->set_rules('email1', 'Email1', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('whatsapp', 'Whatsapp', 'required');
        $this->form_validation->set_rules('logo', 'Logo', 'required');
        $this->form_validation->set_rules('bannerUtama', 'BannerUtama', 'required');
        $this->form_validation->set_rules('bannerUmum', 'BannerUmum', 'required');

        $this->form_validation->set_message('required', 'The %s has not been filled');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->profil_m->get($id);
            if ($query->num_rows() > 0) {
                $profil = $query->row();
                $data = [
                    'page' => 'edit',
                    'row' => $profil
                ];
                $this->template->load('template', 'profil/profil_form', $data);
            } else {
                echo "<script>alert('Data tidak ditemukan');";
                echo "window.location='" . site_url('profil') . "'</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->profil_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil diupdate')</script>";
            }
            echo "<script>window.location='" . site_url('profil') . "'</script>";
        }
    }
}
