<?php

class Login extends Controller
{
    public function index()
    {
        $this->view('login');
    }

    public function login()
    {
        if ($this->model("LoginModel")->Login($_POST)) {
            redirectWithMsg(BASE_URL . '/Dashboard', 'Anda berhasil login', 'success');
        } else {
            redirectWithMsg(BASE_URL . '/Login', 'Username atau password salah', 'danger');
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        redirectWithMsg(BASE_URL . '/Login', 'Anda berhasil logout', 'success');
    }
}
