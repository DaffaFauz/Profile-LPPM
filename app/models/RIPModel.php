<?php

class RIPModel
{
    private $pdo;
    private $table = 'informasi';

    public function __construct()
    {
        $this->pdo = new Db();
    }

    public function getFile()
    {
        $this->pdo->query("SELECT dokumen FROM {$this->table} WHERE jenis_informasi = 'RIP'");
        return $this->pdo->single();
    }

    public function update($file)
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
            $uploadDir = dirname(__DIR__, 2) . '/public/informasi/rip';
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            move_uploaded_file($fileTmpName, $uploadDir . '/' . $fileNameNew);
        }


        $this->pdo->query("UPDATE {$this->table} SET dokumen = :file WHERE jenis_informasi = 'RIP'");
        $this->pdo->bind(':file', $fileNameNew);
        $this->pdo->execute();
        return $this->pdo->rowCount();
    }
}