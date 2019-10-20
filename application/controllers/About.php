<?php 

class About extends CI_Controller {
    public function index($nama = '')
    {
        $data['judul'] = 'Halaman About';
        $data['nama'] = 'Farhan Praw';
         $data['umur'] = '23';
          $data['pekerjaan'] = 'Melawak';
        $this->load->view('templates/header', $data);
        $this->load->view('about/index', $data);
        $this->load->view('templates/footer');
    }
}