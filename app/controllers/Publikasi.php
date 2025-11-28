<?php
class Publikasi extends Controller
{
    public function index()
    {

    }

    public function backend()
    {
        // Ambil data prodi, tahun untuk filter dan tambah publikasi
        $prodi = $this->model('ProdiModel')->getAll();
        $periode = $this->model('PeriodeModel')->getAll();
        $publikasi = $this->model('PublikasiModel')->getAll();

        // View
        $this->view('back/layout/head', ['title' => 'Publikasi']);
        $this->view('back/layout/sidebar', ['page' => 'Publikasi']);
        $this->view('back/layout/navbar');
        $this->view('back/publikasi', ['publikasi' => $publikasi, 'prodi' => $prodi, 'periode' => $periode]);
        $this->view('back/layout/footer');
    }
}