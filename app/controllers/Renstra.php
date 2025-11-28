<?php
class Renstra extends Controller
{
    public function index($slug)
    {
        // Ambil dokumen dari database
        $dokumen = $this->model('RenstraModel')->getFile($slug);

        // View
        $this->view('informasi/dokumen-review', ['judul' => 'Rencana & Strategi', 'dokumen' => $dokumen]);
    }

    public function backend()
    {
        // Ambil data dari database
        $renstra = $this->model('RenstraModel')->getData();
        $this->view('back/layout/sidebar', ['page' => 'Renstra']);
        $this->view('back/layout/head', ['title' => 'Rencana & Strategi']);
        $this->view('back/layout/navbar', ['page' => 'Informasi']);
        $this->view('back/informasi/renstra', ['renstra' => $renstra]);
        $this->view('back/layout/footer');
    }

    public function ubah($id)
    {
        if ($this->model("RenstraModel")->ubah($id, $_FILES['dokumen']) > 0) {
            redirectWithMsg(BASE_URL . "/Renstra/backend", "Dokumen berhasil disimpan", "success");
        } else {
            redirectWithMsg(BASE_URL . "/Renstra/backend", "Dokumen gagal disimpan", "danger");
        }
    }
}