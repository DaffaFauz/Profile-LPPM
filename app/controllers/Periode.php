<?php
class Periode extends Controller
{
    public function index()
    {
        checkLogin();
        // Ambil data tahun
        $periode = $this->model('periodeModel')->getAll();

        // View
        $this->view('back/layout/head', ['title' => 'Periode']);
        $this->view('back/layout/sidebar', ['page' => 'Periode']);
        $this->view('back/layout/navbar');
        $this->view('back/periode', ['periode' => $periode]);
        $this->view('back/layout/footer');
    }

    public function tambah()
    {
        checkLogin();
        $periode = $_POST['periode'];
        if ($this->model("periodeModel")->tambah($periode) > 0) {
            redirectWithMsg(BASE_URL . "/Periode/backend", "Data berhasil ditambahkan", "success");
        } else {
            redirectWithMsg(BASE_URL . "/Periode/backend", "Data gagal ditambahkan", "danger");
        }
    }

    public function ubah($id)
    {
        checkLogin();
        $periode = $_POST['periode'];
        if ($this->model("periodeModel")->ubah($id, $periode) > 0) {
            redirectWithMsg(BASE_URL . "/Periode/backend", "Data berhasil diubah", "success");
        } else {
            redirectWithMsg(BASE_URL . "/Periode/backend", "Data gagal diubah", "danger");
        }
    }
}