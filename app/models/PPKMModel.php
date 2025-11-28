<?php

class PPKMModel
{
    private $pdo;
    private $table = 'informasi';

    public function __construct()
    {
        $this->pdo = new Db();
    }

    public function getData()
    {
        $this->pdo->query("SELECT * FROM {$this->table} INNER JOIN fakultas ON {$this->table}.id_fakultas = fakultas.id_fakultas WHERE {$this->table}.jenis_informasi = 'PPKM'");
        return $this->pdo->resultSet();
    }

    public function getFile($slug)
    {
        $this->pdo->query("SELECT * FROM {$this->table} INNER JOIN fakultas ON {$this->table}.id_fakultas = fakultas.id_fakultas WHERE {$this->table}.slug = :slug");
        $this->pdo->bind(':slug', $slug);
        return $this->pdo->single();
    }

    public function ubah($id, $file)
    {
        // Upload file
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];

        if ($fileSize > 2000000) {
            redirectWithMsg(BASE_URL . "/PPKM/backend", "Ukuran file terlalu besar", "danger");
            exit;
        }

        if ($fileError === 0) {
            // Membuat folder jika belum ada
            $uploadDir = dirname(__DIR__, 2) . '/public/informasi/PPKM';
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            move_uploaded_file($fileTmpName, $uploadDir . '/' . $fileName);
        }

        // Membuat slug
        $info = pathinfo($fileName);
        $slug = $info['filename'];
        $slug = preg_replace('/[^a-zA-Z0-9]/', '-', $slug);
        $slug = preg_replace('/-+/', '-', $slug);
        $slug = trim($slug, '-');
        $slug .= '.' . $info['extension'];

        $this->pdo->query("UPDATE {$this->table} SET dokumen = :file, slug = :slug  WHERE id_informasi = :id");
        $this->pdo->bind(':file', $fileName);
        $this->pdo->bind(':slug', $slug);
        $this->pdo->bind(':id', $id);
        $this->pdo->execute();
        return $this->pdo->rowCount();
    }
}