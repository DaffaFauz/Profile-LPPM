<?php

class KategoriBerita extends Controller
{
    public function index()
    {
        checkLogin();
        // Ambil data kategori berita
        $kategori = $this->model('KategoriBeritaModel')->getAll();

        // View
        $this->view('back/layout/head', ['title' => 'Kategori Berita']);
        $this->view('back/layout/sidebar', ['page' => 'kategori-berita']);
        $this->view('back/layout/navbar');
        $this->view('back/kategori-berita', ['kategori' => $kategori]);
        $this->view('back/layout/footer');
    }

    public function tambah()
    {
        checkLogin();
        if ($this->model("KategoriBeritaModel")->tambah($_POST) > 0) {
            redirectWithMsg(BASE_URL . "/KategoriBerita", "Kategori berita berhasil ditambahkan.", "success");
        } else {
            redirectWithMsg(BASE_URL . "/KategoriBerita", "Kategori berita gagal ditambahkan.", "error");
        }
    }

    public function ubah($id)
    {
        checkLogin();
        if ($this->model("KategoriBeritaModel")->ubah($_POST, $id) > 0) {
            redirectWithMsg(BASE_URL . "/KategoriBerita", "Kategori berita berhasil diubah.", "success");
        } else {
            redirectWithMsg(BASE_URL . "/KategoriBerita", "Kategori berita gagal diubah.", "error");
        }
    }

    public function hapus($id)
    {
        checkLogin();
        if ($this->model("KategoriBeritaModel")->hapus($id) > 0) {
            redirectWithMsg(BASE_URL . "/KategoriBerita", "Kategori berita berhasil dihapus.", "success");
        } else {
            redirectWithMsg(BASE_URL . "/KategoriBerita", "Kategori berita gagal dihapus.", "error");
        }
    }
}