<?php
class Dashboard extends Controller
{
    public function index()
    {
        checkLogin();
        $this->view('back/layout/head', ['title' => 'Dashboard']);
        $this->view('back/layout/sidebar');
        $this->view('back/layout/navbar');
        $this->view('back/dashboard');
        $this->view('back/layout/footer');
    }
}