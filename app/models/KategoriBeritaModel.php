<?php
class KategoriBeritaModel
{
    private $pdo;
    private $table = 'kategori';

    public function __construct()
    {
        $this->pdo = new DB();
    }

    public function getAll()
    {
        $this->pdo->query("SELECT * FROM {$this->table}");
        return $this->pdo->resultSet();
    }

    public function tambah($data)
    {
        // Buat slug
        $slug = str_replace(" ", "-", $data['nama_kategori']);
        $this->pdo->query("INSERT INTO {$this->table} (nama_kategori, slug) VALUES (:nama_kategori, :slug)");
        $this->pdo->bind(':slug', $slug);
        $this->pdo->bind(':nama_kategori', $data['nama_kategori']);
        $this->pdo->execute();
        return $this->pdo->rowCount();
    }

    public function ubah($data, $id)
    {
        // Buat slug
        $slug = str_replace(" ", "-", $data['nama_kategori']);
        $this->pdo->query("UPDATE {$this->table} SET nama_kategori = :nama_kategori, slug = :slug WHERE id_kategori = :id");
        $this->pdo->bind(':nama_kategori', $data['nama_kategori']);
        $this->pdo->bind(':slug', $slug);
        $this->pdo->bind(':id', $id);
        $this->pdo->execute();
        return $this->pdo->rowCount();
    }

    public function hapus($id)
    {
        $this->pdo->query("DELETE FROM {$this->table} WHERE id_kategori = :id");
        $this->pdo->bind(':id', $id);
        return $this->pdo->execute();
    }
}