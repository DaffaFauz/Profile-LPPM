<?php
class PPKM extends Controller
{
    public function index($slug)
    {
        // Ambil data PPKM
        $ppkm = $this->model('PPKMModel')->getFile($slug);
        $this->view('informasi/dokumen-review', ['judul' => 'PPKM ' . $ppkm['kode_fakultas'], 'dokumen' => $ppkm]);
    }

    public function backend()
    {
        // Ambil data PPKM
        $ppkm = $this->model('PPKMModel')->getData();

        // View
        $this->view('back/layout/head', ['title' => 'PPKM']);
        $this->view('back/layout/sidebar', ['page' => 'PPKM']);
        $this->view('back/layout/navbar');
        $this->view('back/informasi/ppkm', ['ppkm' => $ppkm]);
        $this->view('back/layout/footer');
    }

    public function ubah($id)
    {
        if ($this->model("PPKMModel")->ubah($id, $_FILES["dokumen"]) > 0) {
            redirectWithMsg(BASE_URL . "/PPKM/backend", "Dokumen berhasil diupload", "success");
        } else {
            redirectWithMsg(BASE_URL . "/PPKM/backend", "Dokumen gagal diupload", "danger");
        }
    }
}