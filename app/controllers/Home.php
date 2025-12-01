<?php
class Home extends Controller
{
    public function index()
    {
        // Ambil data renstra, PPKM
        $renstra = $this->model('RenstraModel')->getData();
        $ppkm = $this->model('PPKMModel')->getData();
        $publikasi = $this->model("PublikasiModel")->nav();

        $this->view('layout/front/head', ['title' => 'Beranda']);
        $this->view('layout/front/navbar', ['renstra' => $renstra, 'ppkm' => $ppkm, 'publikasi' => $publikasi]);
        $this->view('home');
        $this->view('layout/front/footer');
    }
}