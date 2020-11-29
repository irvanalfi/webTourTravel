<?php defined('BASEPATH') or exit('No direct script access allowed');

class ForgotPs extends CI_Controller
{

    public function index()
    {
        $this->load->view('forgotPs');
    }
    public function resetLink()
    {
        $email = $this->input->post('email');
        $result = $this->db->query("select * from user where email='" . $email . "'")->result_array();
        if (count($result) > 0) {
            $token = rand(1000, 9999);
            $this->db->query("update user set password='" . $token . "'where email='" . $email . "'");

            $message = "Klik link berikut untuk mengubah password <br><a href='" . base_url('reset?token=') . $token . "'>Reset Password</a>";
            $this->Email($email, 'Reset Password Link', $message);
        } else {
            $this->session->set_flashdata('message', 'Email tidak terdaftar');
            redirect(base_url('forgotPs'));
        }
    }
    public function reset()
    {
        $token = $this->input->get('token');
        $this->load->view('reset');
    }

    public function Email()
    {
        $this->load->library('email');

        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googleemail.com',
            'smtp_user' => 'xxxx@gmail.com',
            'smtp_pass' => 'xxxx',
            'smtp_port' => 465,
            'emailtype' => 'html',
            'chartset' => 'utf-8',
            'starttls'  => true,
            'newline' => "\r\n"
        ];

        $this->email->initialize($config);

        $this->email->from('xxxx@gmail.com', 'Traviora');
        $this->email->to('xx@student.polinema.ac.id');
        $this->email->subject('Testing');
        $this->email->message('hello');

        $this->email->send();
    }

    private function _sendEmail()
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googleemail.com',
            'smtp_user' => 'dwikeikromi1205@gmail.com',
            'smtp_pass' => 'smp1glagah',
            'smtp_port' => 465,
            'emailtype' => 'html',
            'chartset' => 'utf-8',
            'newline' => "\r\n"

        ];
        // $this->email->initialize($config);
        $this->load->library('email', $config);

        $this->email->from('dwikeikromi1205@gmail.com', 'Traviora');
        $this->email->to($this->input->post('email'));
        $this->email->subject('Testing');
        $this->email->message('hello');


        if ($this->email->send()) {
            echo "succes";
        } else {
            echo "failed";
            show_error($this->email->print_debugger());
        }
    }

    public function proses()
    {
    }
}

/* End of file Controllername.php */
