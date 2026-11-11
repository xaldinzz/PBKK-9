
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'Toko Online';
        $data['nama_toko'] = 'Toko Kita';

        $this->load->view('toko/home', $data);
    }

}
