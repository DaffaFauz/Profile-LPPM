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
        // Ambil data sejarah, renstra, dan ppkm dari database
        $renstra = $this->model('RenstraModel')->getData();
        $sejarah = $this->model('SejarahModel')->getData();
        $ppkm = $this->model('PPKMModel')->getData();

        // View
        $this->view('layout/front/head', ['title' => 'Sejarah']);
        $this->view('layout/front/navbar', ['page' => 'Tentang Kami', 'renstra' => $renstra, 'ppkm' => $ppkm]);
        $this->view('tentangkami/sejarah', ['sejarah' => $sejarah]);
        $this->view('layout/front/footer');
    }

    public function VisiMisi()
    {
        // Ambil visi misi, renstra, dan ppkm dari database
        $visi_misi = $this->model('VisiMisiModel')->getData();
        $renstra = $this->model('RenstraModel')->getData();
        $ppkm = $this->model('PPKMModel')->getData();

        // View
        $this->view('layout/front/head', ['title' => 'Visi Misi']);
        $this->view('layout/front/navbar', ['page' => 'Tentang Kami', 'renstra' => $renstra, 'ppkm' => $ppkm]);
        $this->view('tentangkami/visi-misi', ['visi_misi' => $visi_misi]);
        $this->view('layout/front/footer');
    }
}