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
        // Hapus tanda # jika ada
        if (isset($data['hashtag'])) {
            $data['hashtag'] = str_replace('#', '', $data['hashtag']);
        }

        // Upload file
        $file = $_FILES['gambar'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];

        if ($fileSize > 2000000) {
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
        $this->pdo->query("INSERT INTO {$this->table} (gambar, judul, slug, body, hashtag, tanggal, status, deskripsi) VALUES (:gambar, :judul, :slug, :body, :hashtag, :tanggal, :status, :deskripsi)");
        $this->pdo->bind(":gambar", $fileNameNew);
        $this->pdo->bind(":judul", $data['judul']);
        $this->pdo->bind(":slug", $data['slug']);
        $this->pdo->bind(":body", $data['body']);
        $this->pdo->bind(":hashtag", $data['hashtag']);
        $this->pdo->bind(":tanggal", $data['tanggal']);
        $this->pdo->bind(":status", 'Pending');
        $this->pdo->bind(":deskripsi", $data['meta_description']);
        $this->pdo->execute();
        return $this->pdo->rowCount();
    }

    public function edit($data, $file, $id)
    {
        // Hapus tanda # jika ada
        if (isset($data['hashtag'])) {
            $data['hashtag'] = str_replace('#', '', $data['hashtag']);
        }

        // Jika tidak ada file yang diupload
        if (empty($file['gambar']['name'])) {
            $this->pdo->query("UPDATE {$this->table} SET judul = :judul, slug = :slug, body = :body, hashtag = :hashtag, tanggal = :tanggal, deskripsi = :deskripsi WHERE id_berita = :id");
            $this->pdo->bind(":judul", $data['judul']);
            $this->pdo->bind(":slug", $data['slug']);
            $this->pdo->bind(":body", $data['body']);
            $this->pdo->bind(":hashtag", $data['hashtag']);
            $this->pdo->bind(":tanggal", $data['tanggal']);
            $this->pdo->bind(":deskripsi", $data['meta_description']);
            $this->pdo->bind(":id", $id);
            $this->pdo->execute();
            return $this->pdo->rowCount();
        } else {

            // Upload file
            $fileData = $file['gambar'];
            $fileName = $fileData['name'];
            $fileTmpName = $fileData['tmp_name'];
            $fileSize = $fileData['size'];
            $fileError = $fileData['error'];
            $fileType = $fileData['type'];

            if ($fileSize > 2000000) {
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

            $this->pdo->query("UPDATE {$this->table} SET gambar = :gambar, judul = :judul, slug = :slug, body = :body, hashtag = :hashtag, tanggal = :tanggal, deskripsi = :deskripsi WHERE id_berita = :id");
            $this->pdo->bind(":gambar", $fileNameNew);
            $this->pdo->bind(":judul", $data['judul']);
            $this->pdo->bind(":slug", $data['slug']);
            $this->pdo->bind(":body", $data['body']);
            $this->pdo->bind(":hashtag", $data['hashtag']);
            $this->pdo->bind(":tanggal", $data['tanggal']);
            $this->pdo->bind(":deskripsi", $data['meta_description']);
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

    public function getById($slug)
    {
        $this->pdo->query("SELECT * FROM {$this->table} WHERE slug = :slug");
        $this->pdo->bind(":slug", $slug);
        $this->pdo->execute();
        return $this->pdo->single();
    }

    public function getByHashtag($tag)
    {
        $tag = "%" . $tag . "%";
        $this->pdo->query("SELECT * FROM {$this->table} WHERE hashtag LIKE :tag AND status = 'Publish'");
        $this->pdo->bind(":tag", $tag);
        $this->pdo->execute();
        return $this->pdo->resultSet();
    }

    public function getLatest($limit = 5)
    {
        $this->pdo->query("SELECT * FROM {$this->table} WHERE status = 'Publish' ORDER BY tanggal DESC LIMIT :limit");
        $this->pdo->bind(":limit", $limit);
        $this->pdo->execute();
        return $this->pdo->resultSet();
    }
}