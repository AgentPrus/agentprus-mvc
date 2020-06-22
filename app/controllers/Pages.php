<?php

class Pages extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $data = ['title' => 'Welcome'];
        $this->loadView('pages/index', $data);
    }

    public function about()
    {
        $data = ['title' => 'Welcome to About'];
        $this->loadView('pages/about', $data);
    }
}