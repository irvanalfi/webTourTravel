<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('Profile_m');
        $this->load->library('form_validation');
        $this->load->model('Cetak_m');
    }

    public function index()
    {
        $data['row'] = $this->Profile_m->get();
        $this->template->load('template', 'profile/profile_data', $data);
    }

    public function proses()
    {
        $config['upload_path']      = './assets/img/profile/';
        $config['allowed_types']    = 'gif|jpg|jpeg|png';
        $config['max_size']         = 5120;
        $config['file_name']        = 'profile-' . date('dmy') . '-' . substr(md5(rand()), 0, 10);
        $this->load->library('upload', $config);

        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {
                    $post['image']  =   $this->upload->data('file_name');
                    $this->profile_m->add($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Data has been successfully saved!!');
                    }
                    redirect('profile');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('profile/add');
                }
            } else {
                $post['image']  = null;
                $this->profile_m->add($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data has been successfully saved!!');
                }
                redirect('profile');
            }
        } else if (isset($_POST['edit'])) {
            if (@$_FILES['image']['name'] != null) {
                if ($this->upload->do_upload('image')) {
                    $profile = $this->profile_m->get($post['profile_id'])->row();
                    if ($profile->avatar != null) {
                        $target_file = './assets/img/profile/' . $profile->avatar;
                        unlink($target_file);
                    }
                    $post['image']  =   $this->upload->data('file_name');
                    $this->profile_m->edit($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Data has been successfully saved!!');
                    }
                    redirect('profile');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('profile/edit');
                }
            } else {
                $post['image']  = $post['oldImage'];
                $this->profile_m->edit($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data has been successfully saved!!');
                }
                redirect('profile');
            }
        }
    }

    public function add()
    {
        $profile = new stdClass();
        $profile->profile_id      = null;
        $profile->webName       = null;
        $profile->statusname    = null;
        $profile->about          = null;
        $profile->address1       = null;
        $profile->address2       = null;
        $profile->email1         = null;
        $profile->email2         = null;
        $profile->facebook       = null;
        $profile->instagram      = null;
        $profile->twitter        = null;
        $profile->youtube        = null;
        $profile->phone          = null;
        $profile->whatsapp       = null;
        $profile->logo           = null;
        $profile->bannerutama   = null;
        $profile->bannerumum    = null;
        $profile->webversion    = null;

        $this->form_validation->set_rules('webname', 'WebName', 'required');
        $this->form_validation->set_rules('statusname', 'StatusName', 'required');
        $this->form_validation->set_rules('about', 'About', 'required');
        $this->form_validation->set_rules('address1', 'Address1', 'required');
        $this->form_validation->set_rules('email1', 'Email1', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('whatsapp', 'Whatsapp', 'required');
        $this->form_validation->set_rules('logo', 'Logo', 'required');
        $this->form_validation->set_rules('bannerutama', 'BannerUtama', 'required');
        $this->form_validation->set_rules('bannerumum', 'BannerUmum', 'required');
        $this->form_validation->set_rules('webversion', 'WebVersion', 'required');

        $this->form_validation->set_message('required', 'The %s has not been filled');

        $data = [
            'page' => 'add',
            'row' => $profile
        ];

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'profile/profile_form', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->profile_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil di Tambahkan')</script>";
            }
            echo "<script>window.location='" . site_url('profile') . "'</script>";
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('webname', 'WebName', 'required');
        $this->form_validation->set_rules('statusname', 'StatusName', 'required');
        $this->form_validation->set_rules('about', 'About', 'required');
        $this->form_validation->set_rules('address1', 'Address1', 'required');
        $this->form_validation->set_rules('email1', 'Email1', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('whatsapp', 'Whatsapp', 'required');
        $this->form_validation->set_rules('logo', 'Logo', 'required');
        $this->form_validation->set_rules('bannerutama', 'BannerUtama', 'required');
        $this->form_validation->set_rules('bannerumum', 'BannerUmum', 'required');
        $this->form_validation->set_rules('webversion', 'WebVersion', 'required');

        $this->form_validation->set_message('required', 'The %s has not been filled');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->Profile_m->get($id);
            if ($query->num_rows() > 0) {
                $profile = $query->row();
                $data = [
                    'page' => 'edit',
                    'row' => $profile
                ];
                $this->template->load('template', 'profile/profile_form', $data);
            } else {
                echo "<script>alert('Data tidak ditemukan');";
                echo "window.location='" . site_url('profile') . "'</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->profile_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data Berhasil diupdate')</script>";
            }
            echo "<script>window.location='" . site_url('profile') . "'</script>";
        }
    }
}
