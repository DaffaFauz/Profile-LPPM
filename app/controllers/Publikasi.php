<?php
class Publikasi extends Controller
{
    public function index($slug)
    {
        $publikasi = $this->model('PublikasiModel')->getBySlug($slug);

        // View
        $this->view('publikasi/dokumen-review', ['judul' => 'Publikasi ' . $publikasi['nama_prodi'] . ' Periode ' . $publikasi['periode'], 'dokumen' => $publikasi]);
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

    public function tambah()
    {
        if ($this->model("PublikasiModel")->tambah($_POST, $_FILES) > 0) {
            redirectWithMsg(BASE_URL . "/Publikasi/backend", "Publikasi berhasil ditambahkan", "success");
        } else {
            redirectWithMsg(BASE_URL . "/Publikasi/backend", "Publikasi gagal ditambahkan", "danger");
        }
    }

    public function ubah($id)
    {
        if ($this->model("PublikasiModel")->ubah($id, $_POST, $_FILES) > 0) {
            redirectWithMsg(BASE_URL . "/Publikasi/backend", "Publikasi berhasil diubah", "success");
        } else {
            redirectWithMsg(BASE_URL . "/Publikasi/backend", "Publikasi gagal diubah", "danger");
        }
    }

    public function hapus($id)
    {
        if ($this->model("PublikasiModel")->hapus($id) > 0) {
            redirectWithMsg(BASE_URL . "/Publikasi/backend", "Publikasi berhasil dihapus", "success");
        } else {
            redirectWithMsg(BASE_URL . "/Publikasi/backend", "Publikasi gagal dihapus", "danger");
        }
    }

    public function penelitian($kode_fakultas)
    {
        // Ambil data penelitian berdasarkan fakultas
        $penelitian = $this->model('PenelitianModel')->getAllbyFakultas($kode_fakultas);
        $publikasi = $this->model("PublikasiModel")->nav();

        // View
        $this->view('layout/front/head', ['title' => 'Penelitian']);
        $this->view('layout/front/navbar', ['page' => 'Penelitian', 'publikasi' => $publikasi]);
        $this->view('publikasi/penelitian', ['penelitian' => $penelitian]);
        $this->view('layout/front/footer');
    }

    public function pkm($kode_fakultas)
    {
        // Ambil data pkm berdasarkan fakultas
        $pkm = $this->model('PkmModel')->getAllbyFakultas($kode_fakultas);
        $publikasi = $this->model("PublikasiModel")->nav();

        // View
        $this->view('layout/front/head', ['title' => 'Pengabdian Kepada Masyarakat']);
        $this->view('layout/front/navbar', ['page' => 'Pengabdian Kepada Masyarakat', 'publikasi' => $publikasi]);
        $this->view('publikasi/pkm', ['pkm' => $pkm]);
        $this->view('layout/front/footer');
    }

    public function hki($kode_fakultas)
    {
        // Ambil data hki berdasarkan fakultas
        $hki = $this->model('HkiModel')->getAllbyFakultas($kode_fakultas);
        $publikasi = $this->model("PublikasiModel")->nav();

        // View
        $this->view('layout/front/head', ['title' => 'Hakcipta Intelektual']);
        $this->view('layout/front/navbar', ['page' => 'Hak Kekayaan Intelektual', 'publikasi' => $publikasi]);
        $this->view('publikasi/hki', ['hki' => $hki]);
        $this->view('layout/front/footer');
    }
}