<?php

class About extends Controller
{
    public function index($nama = 'Julang', $pekerjaan = 'Mahasiswa', $umur = 19)
    {
        $data['judul'] = 'About Index';
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['pekerjaan'] = $pekerjaan;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'About page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
