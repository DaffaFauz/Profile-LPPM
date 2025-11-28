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
        $this->pdo->query("SELECT * FROM {$this->table}");
        return $this->pdo->resultSet();
    }
}
