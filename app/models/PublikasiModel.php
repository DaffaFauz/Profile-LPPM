<?php
class PublikasiModel
{
    private $pdo;
    private $table = 'publikasi';

    public function __construct()
    {
        $this->pdo = new Db();
    }

    public function getAll()
    {
        $this->pdo->query("SELECT * FROM {$this->table} INNER JOIN prodi ON {$this->table}.id_prodi = prodi.id_prodi INNER JOIN tahun ON {$this->table}.id_tahun = tahun.id_tahun");
        return $this->pdo->resultSet();
    }

    public function getBySlug($slug)
    {
        $this->pdo->query("SELECT * FROM {$this->table} INNER JOIN prodi ON {$this->table}.id_prodi = prodi.id_prodi INNER JOIN tahun ON {$this->table}.id_tahun = tahun.id_tahun WHERE {$this->table}.slug = :slug");
        $this->pdo->bind(':slug', $slug);
        return $this->pdo->single();
    }

    public function tambah($data, $file)
    {
        // Upload file
        $file = $file['file'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];

        if ($fileSize > 2000000) {
            redirectWithMsg(BASE_URL . "/Publikasi/backend", "Ukuran file terlalu besar", "danger");
            exit;
        }
        $allowedTypes = ['application/pdf'];
        if (!in_array($fileType, $allowedTypes)) {
            redirectWithMsg(BASE_URL . "/Publikasi/backend", "Format file tidak didukung. Harap upload file PDF", "danger");
            exit;
        }

        if ($fileError === 0) {
            // Membuat folder jika belum ada
            $uploadDir = dirname(__DIR__, 2) . '/public/Publikasi';
            if ($data['jenis_publikasi'] == 'Penelitian') {
                if (!file_exists($uploadDir . '/Penelitian')) {
                    mkdir($uploadDir . '/Penelitian', 0777, true);
                }
                $uploadDir .= '/Penelitian';
            } elseif ($data['jenis_publikasi'] == 'Pengabdian Kepada Masyarakat') {
                if (!file_exists($uploadDir . '/Pengabdian Kepada Masyarakat')) {
                    mkdir($uploadDir . '/Pengabdian Kepada Masyarakat', 0777, true);
                }
                $uploadDir .= '/Pengabdian Kepada Masyarakat';
            } else {
                if (!file_exists($uploadDir . '/Hak Kekayaan Intelektual')) {
                    mkdir($uploadDir . '/Hak Kekayaan Intelektual', 0777, true);
                }
                $uploadDir .= '/Hak Kekayaan Intelektual';
            }
            move_uploaded_file($fileTmpName, $uploadDir . '/' . $fileName);
        }

        // Membuat slug
        $slug = implode('-', explode(' ', $fileName));
        $this->pdo->query("INSERT INTO {$this->table} (id_prodi, jenis_publikasi, id_tahun, slug, dokumen) VALUES (:id_prodi, :jenis_publikasi, :id_tahun, :slug, :dokumen)");
        $this->pdo->bind(':id_prodi', $data['id_prodi']);
        $this->pdo->bind(':jenis_publikasi', $data['jenis_publikasi']);
        $this->pdo->bind(':id_tahun', $data['id_tahun']);
        $this->pdo->bind(':slug', $slug);
        $this->pdo->bind(':dokumen', $fileName);
        $this->pdo->execute();
        return $this->pdo->rowCount();
    }

    public function ubah($id, $data, $file)
    {
        if ($file['file']['error'] === 4) {
            $this->pdo->query("UPDATE {$this->table} SET id_prodi = :id_prodi, jenis_publikasi = :jenis_publikasi, id_tahun = :id_tahun WHERE id_publikasi = :id_publikasi");
            $this->pdo->bind(':id_prodi', $data['id_prodi']);
            $this->pdo->bind(':jenis_publikasi', $data['jenis_publikasi']);
            $this->pdo->bind(':id_tahun', $data['id_tahun']);
            $this->pdo->bind(':id_publikasi', $id);
            $this->pdo->execute();
            return $this->pdo->rowCount();
        } else {
            // Upload file
            $file = $file['file'];
            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileError = $file['error'];
            $fileType = $file['type'];

            if ($fileSize > 2000000) {
                redirectWithMsg(BASE_URL . "/Publikasi/backend", "Ukuran file terlalu besar", "danger");
                exit;
            }
            $allowedTypes = ['application/pdf'];
            if (!in_array($fileType, $allowedTypes)) {
                redirectWithMsg(BASE_URL . "/Publikasi/backend", "Format file tidak didukung. Harap upload file PDF", "danger");
                exit;
            }

            if ($fileError === 0) {
                // Membuat folder jika belum ada
                $uploadDir = dirname(__DIR__, 2) . '/public/Publikasi';
                if ($data['jenis_publikasi'] == 'Penelitian') {
                    if (!file_exists($uploadDir . '/Penelitian')) {
                        mkdir($uploadDir . '/Penelitian', 0777, true);
                    }
                    $uploadDir .= '/Penelitian';
                } elseif ($data['jenis_publikasi'] == 'Pengabdian Kepada Masyarakat') {
                    if (!file_exists($uploadDir . '/Pengabdian Kepada Masyarakat')) {
                        mkdir($uploadDir . '/Pengabdian Kepada Masyarakat', 0777, true);
                    }
                    $uploadDir .= '/Pengabdian Kepada Masyarakat';
                } else {
                    if (!file_exists($uploadDir . '/Hak Kekayaan Intelektual')) {
                        mkdir($uploadDir . '/Hak Kekayaan Intelektual', 0777, true);
                    }
                    $uploadDir .= '/Hak Kekayaan Intelektual';
                }
                move_uploaded_file($fileTmpName, $uploadDir . '/' . $fileName);
            }

            // Membuat slug
            $slug = implode('-', explode(' ', $fileName));
            $this->pdo->query("UPDATE {$this->table} SET id_prodi = :id_prodi, jenis_publikasi = :jenis_publikasi, id_tahun = :id_tahun, slug = :slug, dokumen = :dokumen WHERE id_publikasi = :id_publikasi");
            $this->pdo->bind(':id_prodi', $data['id_prodi']);
            $this->pdo->bind(':jenis_publikasi', $data['jenis_publikasi']);
            $this->pdo->bind(':id_tahun', $data['id_tahun']);
            $this->pdo->bind(':slug', $slug);
            $this->pdo->bind(':dokumen', $fileName);
            $this->pdo->bind(':id_publikasi', $id);
            $this->pdo->execute();
            return $this->pdo->rowCount();
        }
    }

    public function hapus($id)
    {
        $this->pdo->query("DELETE FROM {$this->table} WHERE id_publikasi = :id_publikasi");
        $this->pdo->bind(':id_publikasi', $id);
        $this->pdo->execute();
        return $this->pdo->rowCount();
    }

    public function nav()
    {
        $this->pdo->query("SELECT DISTINCT fakultas.id_fakultas, fakultas.nama_fakultas, fakultas.kode_fakultas, {$this->table}.jenis_publikasi FROM {$this->table} INNER JOIN prodi ON {$this->table}.id_prodi = prodi.id_prodi INNER JOIN fakultas ON prodi.id_fakultas = fakultas.id_fakultas INNER JOIN tahun ON {$this->table}.id_tahun = tahun.id_tahun");
        return $this->pdo->resultset();
    }
}
