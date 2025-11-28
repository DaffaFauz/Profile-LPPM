<?php

class RIP extends Controller
{
    public function index()
    {
        // Ambil dokumen dari database
        $dokumen = $this->model('RIPModel')->getFile();

        // View
        $this->view('informasi/dokumen-review', ['judul' => 'RIP LPPM', 'dokumen' => $dokumen]);
    }

    public function backend()
    {
        // Ambil dokumen dari database
        $data['dokumen'] = $this->model('RIPModel')->getFile();

        // View
        $this->view('back/layout/head', ['title' => 'RIP LPPM']);
        $this->view('back/layout/sidebar', ['page' => 'RIP']);
        $this->view('back/layout/navbar');
        $this->view('back/informasi/rip', $data);
        $this->view('back/layout/footer');
    }

    public function ubah()
    {
        if ($this->model("RIPModel")->update($_FILES['file']) > 0) {
            redirectWithMsg(BASE_URL . '/RIP/backend', 'Data berhasil diubah', 'success');
        } else {
            redirectWithMsg(BASE_URL . '/RIP/backend', 'Data gagal diubah', 'danger');
        }
    }
}