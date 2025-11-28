<?php
class PeriodeModel
{
    private $pdo;
    private $table = 'tahun';

    public function __construct()
    {
        $this->pdo = new Db();
    }

    public function getAll()
    {
        $this->pdo->query("SELECT * FROM {$this->table}");
        return $this->pdo->resultSet();
    }

    public function tambah($periode)
    {
        $this->pdo->query("INSERT INTO {$this->table} (periode) VALUES (:periode)");
        $this->pdo->bind(':periode', $periode);
        return $this->pdo->execute();
    }

    public function ubah($id, $periode)
    {
        $this->pdo->query("UPDATE {$this->table} SET periode = :periode WHERE id_tahun = :id");
        $this->pdo->bind(':periode', $periode);
        $this->pdo->bind(':id', $id);
        return $this->pdo->execute();
    }
}