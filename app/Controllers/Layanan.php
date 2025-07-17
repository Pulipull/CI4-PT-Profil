<?php

namespace App\Controllers;

use App\Models\LayananModel;

class Layanan extends BaseController
{
    protected $layanan;

    public function __construct()
    {
        $this->layanan = new LayananModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Layanan',
            'layanan' => $this->layanan->findAll()
        ];

        
        return view('layanan/index', $data);
       
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Layanan'
        ];

        echo view('layouts/header', $data);
        echo view('layanan/create', $data);
        echo view('layouts/footer');
    }

    public function store()
    {
        // Validasi sederhana (nama wajib diisi)
        $nama = $this->request->getPost('nama');
        $deskripsi = $this->request->getPost('deskripsi');

        if (!$nama || !$deskripsi) {
            return redirect()->back()->with('pesan', 'Nama dan deskripsi wajib diisi.');
        }

        // Simpan ke DB
        $this->layanan->save([
            'nama' => $nama,
            'deskripsi' => $deskripsi
        ]);

        return redirect()->to('/layanan')->with('pesan', '✅ Layanan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Layanan',
            'layanan' => $this->layanan->find($id)
        ];

        echo view('layouts/header', $data);
        echo view('layanan/edit', $data);
        echo view('layouts/footer');
    }

    public function update($id)
    {
        $this->layanan->update($id, [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ]);

        return redirect()->to('/layanan')->with('pesan', '📝 Layanan berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->layanan->delete($id);
        return redirect()->to('/layanan')->with('pesan', '🗑️ Layanan berhasil dihapus.');
    }
}
