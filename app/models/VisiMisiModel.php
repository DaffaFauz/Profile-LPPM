<?php

class VisiMisiModel
{
    private $pdo;
    private $table = "visi_misi";

    public function __construct()
    {
        $this->pdo = new Db();
    }

    public function getData()
    {
        $this->pdo->query("SELECT * FROM {$this->table}");
        return $this->pdo->single();
    }

    public function ubah($body)
    {
        $this->pdo->query("UPDATE {$this->table} SET content = :content");
        $this->pdo->bind(":content", $body);
        $this->pdo->execute();
        return $this->pdo->rowCount();
    }
}