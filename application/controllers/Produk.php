
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Produk_model');
        $this->load->helper(array('url', 'form'));
        $this->load->library(array(
            'session',
            'form_validation',
            'upload'
        ));

        // Wajib login
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }

        // Hanya admin
        if ($this->session->userdata('role') !== 'admin') {
            show_error(
                'Anda tidak memiliki akses mengelola produk.',
                403,
                'Akses Ditolak'
            );
        }
    }

    public function index()
    {
        $data['judul'] = 'Data Produk';
        $data['nama_toko'] = 'Toko Kita';
        $data['produk'] = $this->Produk_model->get_all();

        $this->load->view('produk/index', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'nama_produk', 'Nama Produk', 'required'
        );

        $this->form_validation->set_rules(
            'harga', 'Harga', 'required|numeric'
        );

        $this->form_validation->set_rules(
            'stok', 'Stok', 'required|integer'
        );

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Tambah Produk';
            $data['nama_toko'] = 'Toko Kita';

            $this->load->view('produk/form', $data);
            return;
        }

        $gambar = NULL;

        if (!empty($_FILES['gambar']['name'])) {

            $config['upload_path'] = FCPATH . 'uploads/produk/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->upload->initialize($config, TRUE);

            if (!$this->upload->do_upload('gambar')) {
                $data['judul'] = 'Tambah Produk';
                $data['nama_toko'] = 'Toko Kita';
                $data['error_upload'] = $this->upload->display_errors();

                $this->load->view('produk/form', $data);
                return;
            }

            $upload_data = $this->upload->data();
            $gambar = $upload_data['file_name'];
        }

        $data_produk = array(
            'nama_produk' => $this->input->post('nama_produk', TRUE),
            'deskripsi' => $this->input->post('deskripsi', TRUE),
            'harga' => $this->input->post('harga', TRUE),
            'stok' => $this->input->post('stok', TRUE),
            'gambar' => $gambar
        );

        $this->Produk_model->insert($data_produk);

        redirect('produk');
    }

    public function edit($id)
    {
        $produk = $this->Produk_model->get_by_id($id);

        if (!$produk) {
            show_404();
            return;
        }

        $this->form_validation->set_rules(
            'nama_produk', 'Nama Produk', 'required'
        );

        $this->form_validation->set_rules(
            'harga', 'Harga', 'required|numeric'
        );

        $this->form_validation->set_rules(
            'stok', 'Stok', 'required|integer'
        );

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Edit Produk';
            $data['nama_toko'] = 'Toko Kita';
            $data['produk'] = $produk;

            $this->load->view('produk/form', $data);
            return;
        }

        $gambar = $produk->gambar;

        if (!empty($_FILES['gambar']['name'])) {

            $config['upload_path'] = FCPATH . 'uploads/produk/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->upload->initialize($config, TRUE);

            if (!$this->upload->do_upload('gambar')) {
                $data['judul'] = 'Edit Produk';
                $data['nama_toko'] = 'Toko Kita';
                $data['produk'] = $produk;
                $data['error_upload'] = $this->upload->display_errors();

                $this->load->view('produk/form', $data);
                return;
            }

            $upload_data = $this->upload->data();
            $gambar_baru = $upload_data['file_name'];

            if (!empty($produk->gambar)) {
                $file_lama = FCPATH . 'uploads/produk/' . $produk->gambar;

                if (is_file($file_lama)) {
                    unlink($file_lama);
                }
            }

            $gambar = $gambar_baru;
        }

        $data_produk = array(
            'nama_produk' => $this->input->post('nama_produk', TRUE),
            'deskripsi' => $this->input->post('deskripsi', TRUE),
            'harga' => $this->input->post('harga', TRUE),
            'stok' => $this->input->post('stok', TRUE),
            'gambar' => $gambar
        );

        $this->Produk_model->update($id, $data_produk);

        redirect('produk');
    }

    public function hapus($id)
    {
        $produk = $this->Produk_model->get_by_id($id);

        if (!$produk) {
            show_404();
            return;
        }

        if (!empty($produk->gambar)) {
            $file = FCPATH . 'uploads/produk/' . $produk->gambar;

            if (is_file($file)) {
                unlink($file);
            }
        }

        $this->Produk_model->delete($id);

        redirect('produk');
    }
}
