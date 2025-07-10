<?php
    namespace App\Controllers;

    use App\Models\LayananModel;

    class Home extends BaseController
    {
        public function index()
        {
            $layanan = new LayananModel();

            $data = [
                'title' => 'Beranda',
                'layanan' => $layanan->findAll()
            ];

            echo view('layouts/header', $data);
            echo view('home/index', $data);
            echo view('layouts/footer');
        }
    }
