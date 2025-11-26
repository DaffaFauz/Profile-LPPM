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
        $this->view('layout/front/head', ['title' => 'Sejarah']);
        $this->view('layout/front/navbar', ['page' => 'Tentang Kami']);
        $this->view('sejarah');
        $this->view('layout/front/footer');
    }

    public function VisiMisi()
    {
        $this->view('layout/front/head', ['title' => 'Visi Misi']);
        $this->view('layout/front/navbar', ['page' => 'Tentang Kami']);
        $this->view('visi-misi');
        $this->view('layout/front/footer');
    }
}