<?php

class RenstraModel
{
    private $pdo;
    private $table = 'informasi';

    public function __construct()
    {
        $this->pdo = new Db();
    }

    public function getData()
    {
        $this->pdo->query("SELECT * FROM {$this->table} INNER JOIN fakultas ON {$this->table}.id_fakultas = fakultas.id_fakultas WHERE jenis_informasi = 'Renstra'");
        return $this->pdo->resultSet();
    }

    public function getFile($id)
    {
        $this->pdo->query("SELECT * FROM {$this->table} WHERE id_informasi = :id");
        $this->pdo->bind(':id', $id);
        return $this->pdo->single();
    }

    public function ubah($id, $file)
    {
        // Upload file
        $file = $_FILES['file'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];

        if ($fileSize > 1000000) {
            redirectWithMsg(BASE_URL . "/Berita/backend", "Ukuran file terlalu besar", "danger");
            exit;
        }
        $allowedTypes = ['application/pdf'];
        if (!in_array($fileType, $allowedTypes)) {
            redirectWithMsg(BASE_URL . "/Berita/backend", "Format file tidak didukung. Harap upload file PDF", "danger");
            exit;
        }

        if ($fileError === 0) {
            $fileNameNew = uniqid("", true) . $fileName;
            // Membuat folder jika belum ada
            $uploadDir = dirname(__DIR__, 2) . '/public/informasi/Renstra';
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            move_uploaded_file($fileTmpName, $uploadDir . '/' . $fileNameNew);
        }


        $this->pdo->query("UPDATE {$this->table} SET dokumen = :file WHERE id_informasi = :id");
        $this->pdo->bind(':file', $fileNameNew);
        $this->pdo->bind(':id', $id);
        $this->pdo->execute();
        return $this->pdo->rowCount();
    }
}