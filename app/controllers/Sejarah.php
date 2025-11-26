<?php
class Sejarah extends Controller
{
    public function index()
    {
        // Ambil data sejarah
        $sejarah = $this->model('SejarahModel')->getData();

        // view
        $this->view('back/layout/head', ['title' => 'Kelola Sejarah']);
        $this->view('back/layout/sidebar', ['page' => 'Sejarah']);
        $this->view('back/layout/navbar');
        $this->view('back/sejarah', ['sejarah' => $sejarah]);
        $this->view('back/layout/footer');
    }

    public function ubah()
    {
        $body = $_POST['body'];
        if ($this->model("SejarahModel")->ubah($body) > 0) {
            redirectWithMsg(BASE_URL . "/Sejarah/backend", "Data berhasil diubah", "success");
        } else {
            redirectWithMsg(BASE_URL . "/Sejarah/backend", "Data gagal diubah", "danger");
        }
    }
}