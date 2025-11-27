<?php
class Renstra extends Controller
{
    public function index()
    {
        // Ambil dokumen dari database
        $dokumen = $this->model('RenstraModel')->getFile($_POST['id_informasi']);

        // View
        $this->view('layout/front/head', ['title' => 'Rencana & Strategi']);
        $this->view('layout/front/navbar');
        $this->view('informasi/dokumen-review', ['judul' => 'Rencana & Strategi', 'dokumen' => $dokumen]);
        $this->view('layout/front/footer');
    }

    public function backend()
    {
        // Ambil data dari database
        $renstra = $this->model('RenstraModel')->getData();
        $this->view('back/layout/sidebar', ['page' => 'Renstra']);
        $this->view('back/layout/head', ['title' => 'Rencana & Strategi']);
        $this->view('back/layout/navbar', ['page' => 'Informasi']);
        $this->view('back/informasi/renstra/index', ['renstra' => $renstra]);
        $this->view('back/layout/footer');
    }

    public function ubah($id)
    {
        if ($this->model("RenstraModel")->ubah($id, $_FILES['file']) > 0) {
            redirectWithMsg(BASE_URL . "Renstra/backend", "Dokumen berhasil disimpan", "success");
        } else {
            redirectWithMsg(BASE_URL . "Renstra/backend", "Dokumen gagal disimpan", "danger");
        }
    }
}