<?php

class PkmModel
{
    private $pdo;
    private $table = 'publikasi';

    public function __construct()
    {
        $this->pdo = new Db();
    }

    public function getAllbyFakultas($kode_fakultas)
    {
        $this->pdo->query("SELECT * FROM {$this->table} INNER JOIN prodi ON {$this->table}.id_prodi = prodi.id_prodi INNER JOIN tahun ON {$this->table}.id_tahun = tahun.id_tahun INNER JOIN fakultas ON prodi.id_fakultas = fakultas.id_fakultas WHERE jenis_publikasi = 'Pengabdian Kepada Masyarakat' AND fakultas.kode_fakultas = :kode_fakultas");
        $this->pdo->bind(":kode_fakultas", $kode_fakultas);
        return $this->pdo->resultSet();
    }
}