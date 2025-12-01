<?php

class LoginModel
{
    private $pdo;
    private $table = 'users';

    public function __construct()
    {
        $this->pdo = new Db();
    }

    public function Login($data)
    {
        // Cek keberadaan & kesesuaian username di database
        $this->pdo->query("SELECT * FROM {$this->table} WHERE username = :username");
        $this->pdo->bind(":username", $data['email-username']);
        $user = $this->pdo->single();
        $_SESSION['user'] = $user;

        // Cek password
        if ($user) {
            if (password_verify($data['password'], $user['password'])) {
                return true;
            }
        } else {
            return false;
        }
    }
}