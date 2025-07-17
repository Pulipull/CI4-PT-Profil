<?php
    namespace App\Controllers;

    use App\Models\LayananModel;

    class Home extends BaseController
    {
        public function index()
        {
            helper('url');
            $layanan = new LayananModel();

            $data = [
                'title' => 'Beranda',
                'layanan' => $layanan->findAll()
            ];

           return view('home/index', $data);
        }
    }
