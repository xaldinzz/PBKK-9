
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('User_model');
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');
    }

    public function index()
    {
        redirect('auth/login');
    }

    public function login()
    {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('role') === 'admin') {
                redirect('dashboard');
            } else {
                redirect('toko');
            }
        }

        $data['error'] = '';

        if ($this->input->method() === 'post') {

            $username = trim($this->input->post('username', TRUE));
            $password = $this->input->post('password');

            $user = $this->User_model->get_by_username($username);

            if ($user && password_verify($password, $user->password)) {

                $session_data = array(
                    'user_id' => $user->id,
                    'nama' => $user->nama,
                    'username' => $user->username,
                    'role' => $user->role,
                    'logged_in' => TRUE
                );

                $this->session->sess_regenerate(TRUE);
                $this->session->set_userdata($session_data);

                if ($user->role === 'admin') {
                    redirect('dashboard');
                } else {
                    redirect('toko');
                }

            } else {
                $data['error'] = 'Username atau password salah!';
            }
        }

        $this->load->view('auth/login', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect('auth/login');
    }
}
