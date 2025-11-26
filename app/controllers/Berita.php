<?php
class Berita extends Controller
{
    public function index()
    {
        // Ambil berita dari database
        $berita = $this->model("BeritaModel")->getAll();

        // View
        $this->view('layout/front/head', ['title' => 'Berita']);
        $this->view('layout/front/navbar', ['page' => 'berita']);
        $this->view('berita', ['berita' => $berita]);
        $this->view('layout/front/footer');
    }

    public function backend()
    {
        // Ambil data berita dari database
        $berita = $this->model("BeritaModel")->getAll();

        // View
        $this->view('back/layout/head', ['title' => 'Kelola Berita']);
        $this->view('back/layout/sidebar');
        $this->view('back/layout/navbar');
        $this->view('back/berita', ['berita' => $berita]);
        $this->view('back/layout/footer');
    }

    public function tambah()
    {
        if ($this->model("BeritaModel")->tambah($_POST, $_FILES) > 0) {
            redirectWithMsg(BASE_URL . "/Berita/backend", "Data berhasil ditambahkan", "success");
        } else {
            redirectWithMsg(BASE_URL . "/Berita/backend", "Data gagal ditambahkan", "danger");
        }
    }

    public function ubah($id)
    {
        if ($this->model("BeritaModel")->edit($_POST, $_FILES, $id) > 0) {
            redirectWithMsg(BASE_URL . "/Berita/backend", "Data berhasil diubah", "success");
        } else {
            redirectWithMsg(BASE_URL . "/Berita/backend", "Data gagal diubah", "danger");
        }
    }

    public function status($id)
    {
        if ($this->model("BeritaModel")->status($id) > 0) {
            redirectWithMsg(BASE_URL . "/Berita/backend", "Data berhasil diubah", "success");
        } else {
            redirectWithMsg(BASE_URL . "/Berita/backend", "Data gagal diubah", "danger");
        }
    }

    public function hapus($id)
    {
        if ($this->model("BeritaModel")->hapus($id) > 0) {
            redirectWithMsg(BASE_URL . "/Berita/backend", "Data berhasil dihapus", "success");
        } else {
            redirectWithMsg(BASE_URL . "/Berita/backend", "Data gagal dihapus", "danger");
        }
    }
}