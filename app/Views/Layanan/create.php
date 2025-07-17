<?= $this->extend('layouts/admin/admin') ?>
<?= $this->section('content') ?>

<h3><?= $title ?></h3>
<form action="/layanan/store" method="post" class="shadow-sm p-4 bg-white rounded">
    <div class="mb-3">
        <label class="form-label">Nama Layanan</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="/layanan" class="btn btn-secondary">Kembali</a>
</form>
