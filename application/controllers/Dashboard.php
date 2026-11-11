
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();

        // Periksa status login
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        // Dashboard hanya untuk admin
        if ($this->session->userdata('role') !== 'admin') {
            show_error(
                'Anda tidak memiliki akses ke halaman ini.',
                403,
                'Akses Ditolak'
            );
        }
    }

    public function index()
    {
        $data['judul'] = 'Dashboard Toko';
        $data['nama_toko'] = 'Toko Kita';

        $data['status_database'] = $this->db->conn_id
            ? 'Terhubung'
            : 'Tidak Terhubung';

        $data['nama_admin'] = $this->session->userdata('nama');

        $this->load->view('dashboard/index', $data);
    }
}
