<?php
class ProdiModel
{
    private $pdo;
    private $table = 'prodi';

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