<?php
class TentangKami extends Controller
{
    public function index()
    {
        $this->view('layout/header');
        $this->view('layout/tentang-kami');
        $this->view('layout/footer');
    }

    public function Sejarah()
    {
        // Ambil sejarah dari database
        $sejarah = $this->model('SejarahModel')->getData();
        $this->view('layout/front/head', ['title' => 'Sejarah']);
        $this->view('layout/front/navbar', ['page' => 'Tentang Kami']);
        $this->view('sejarah', ['sejarah' => $sejarah]);
        $this->view('layout/front/footer');
    }

    public function VisiMisi()
    {
        // Ambil visi misi dari database
        $visi_misi = $this->model('VisiMisiModel')->getData();
        $this->view('layout/front/head', ['title' => 'Visi Misi']);
        $this->view('layout/front/navbar', ['page' => 'Tentang Kami']);
        $this->view('visi-misi', ['visi_misi' => $visi_misi]);
        $this->view('layout/front/footer');
    }
}