<?php

class BeritaModel
{
    private $pdo;
    private $table = 'berita';

    public function __construct()
    {
        $this->pdo = new Db();
    }

    public function getAll()
    {
        $this->pdo->query("SELECT * FROM {$this->table}");
        return $this->pdo->resultSet();
    }

    public function tambah($data, $file)
    {
        // Upload file
        $file = $_FILES['gambar'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];

        if ($fileSize > 1000000) {
            redirectWithMsg(BASE_URL . "/Berita/backend", "Ukuran file terlalu besar", "danger");
            exit;
        }
        $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
        if (!in_array($fileType, $allowedTypes)) {
            redirectWithMsg(BASE_URL . "/Berita/backend", "Format file tidak didukung", "danger");
            exit;
        }

        if ($fileError === 0) {
            $fileNameNew = uniqid("", true) . $fileName;
            // Membuat folder jika belum ada
            $uploadDir = dirname(__DIR__, 2) . '/public/img/berita';
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            move_uploaded_file($fileTmpName, $uploadDir . '/' . $fileNameNew);
        }

        // Membuat slug dari judul untuk link
        $slug = implode("-", explode(" ", $data['judul']));
        $this->pdo->query("INSERT INTO {$this->table} (gambar, judul, slug, body, hashtag, tanggal, status) VALUES (:gambar, :judul, :slug, :body, :hashtag, :tanggal, :status)");
        $this->pdo->bind(":gambar", $fileNameNew);
        $this->pdo->bind(":judul", $data['judul']);
        $this->pdo->bind(":slug", $slug);
        $this->pdo->bind(":body", $data['body']);
        $this->pdo->bind(":hashtag", $data['hashtag']);
        $this->pdo->bind(":tanggal", $data['tanggal']);
        $this->pdo->bind(":status", 'Pending');
        $this->pdo->execute();
        return $this->pdo->rowCount();
    }

    public function edit($data, $file, $id)
    {
        // Jika tidak ada file yang diupload
        if (empty($file['name'])) {
            $this->pdo->query("UPDATE {$this->table} SET judul = :judul, body = :body, hashtag = :hashtag, tanggal = :tanggal WHERE id_berita = :id");
            $this->pdo->bind(":judul", $data['judul']);
            $this->pdo->bind(":body", $data['body']);
            $this->pdo->bind(":hashtag", $data['hashtag']);
            $this->pdo->bind(":tanggal", $data['tanggal']);
            $this->pdo->bind(":id", $id);
            $this->pdo->execute();
            return $this->pdo->rowCount();
        } else {

            // Upload file
            $file = $_FILES['gambar'];
            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileError = $file['error'];
            $fileType = $file['type'];

            if ($fileSize > 1000000) {
                redirectWithMsg(BASE_URL . "/Berita/backend", "Ukuran file terlalu besar", "danger");
                exit;
            }
            $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
            if (!in_array($fileType, $allowedTypes)) {
                redirectWithMsg(BASE_URL . "/Berita/backend", "Format file tidak didukung", "danger");
                exit;
            }

            if ($fileError === 0) {
                $fileNameNew = uniqid("", true) . $fileName;
                // Membuat folder jika belum ada
                $uploadDir = dirname(__DIR__, 2) . '/public/img/berita';
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                move_uploaded_file($fileTmpName, $uploadDir . '/' . $fileNameNew);
            }

            // bikin slug
            $slug = implode("-", explode(" ", $data['judul']));
            $this->pdo->query("UPDATE {$this->table} SET gambar = :gambar, judul = :judul, slug = :slug, body = :body, hashtag = :hashtag, tanggal = :tanggal WHERE id_berita = :id");
            $this->pdo->bind(":gambar", $fileNameNew);
            $this->pdo->bind(":judul", $data['judul']);
            $this->pdo->bind(":slug", $slug);
            $this->pdo->bind(":body", $data['body']);
            $this->pdo->bind(":hashtag", $data['hashtag']);
            $this->pdo->bind(":tanggal", $data['tanggal']);
            $this->pdo->bind(":id", $id);
            $this->pdo->execute();
            return $this->pdo->rowCount();
        }
    }

    public function status($id)
    {
        // Ambil data berita terlebih dahulu
        $this->pdo->query("SELECT * FROM {$this->table} WHERE id_berita = :id");
        $this->pdo->bind(":id", $id);
        $this->pdo->execute();
        $data = $this->pdo->single();
        if ($data['status'] == 'Publish') {
            $status = 'Pending';
        } else {
            $status = 'Publish';
        }
        $this->pdo->query("UPDATE {$this->table} SET status = :status WHERE id_berita = :id");
        $this->pdo->bind(":status", $status);
        $this->pdo->bind(":id", $id);
        $this->pdo->execute();
        return $this->pdo->rowCount();
    }

    public function hapus($id)
    {
        $this->pdo->query("DELETE FROM {$this->table} WHERE id_berita = :id");
        $this->pdo->bind(":id", $id);
        $this->pdo->execute();
        return $this->pdo->rowCount();
    }
}