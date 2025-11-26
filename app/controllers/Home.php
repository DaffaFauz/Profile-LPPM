<?php
class Home extends Controller
{
    public function index()
    {
        $this->view('layout/front/head', ['title' => 'Beranda']);
        $this->view('layout/front/navbar');
        $this->view('home');
        $this->view('layout/front/footer');
    }
}