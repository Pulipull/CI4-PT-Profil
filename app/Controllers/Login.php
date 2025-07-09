<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('auth/login', ['title' => 'Login Admin']);
    }

    public function proses()
    {
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)->first();

        if (!$user) {
            return redirect()->back()->with('pesan', '❌ Username tidak ditemukan.');
        }

        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('pesan', '❌ Password salah.');
        }

        session()->set([
            'user_id'   => $user['id'],
            'username'  => $user['username'],
            'nama'      => $user['nama'],
            'logged_in' => true
        ]);

        return redirect()->to('/layanan')->with('pesan', '✅ Login berhasil.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('pesan', 'Anda telah logout.');
    }
}
