<?php
class VisiMisi extends Controller
{
    public function index()
    {
        // Ambil data sejarah
        $visi_misi = $this->model('VisiMisiModel')->getData();

        // view
        $this->view('back/layout/head', ['title' => 'Kelola Visi Misi']);
        $this->view('back/layout/sidebar', ['page' => 'Visi Misi']);
        $this->view('back/layout/navbar');
        $this->view('back/tentangkami/visi-misi', ['visi_misi' => $visi_misi]);
        $this->view('back/layout/footer');
    }

    public function ubah()
    {
        $body = $_POST['body'];
        if ($this->model("VisiMisiModel")->ubah($body) > 0) {
            redirectWithMsg(BASE_URL . "/VisiMisi/backend", "Data berhasil diubah", "success");
        } else {
            redirectWithMsg(BASE_URL . "/VisiMisi/backend", "Data gagal diubah", "danger");
        }
    }
}