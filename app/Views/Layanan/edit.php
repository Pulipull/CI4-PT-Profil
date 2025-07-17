<?= $this->extend('layouts/admin/admin') ?>
<?= $this->section('content') ?>

<h3>Edit Layanan</h3>
<form action="/layanan/update/<?= $layanan['id'] ?>" method="post">
  <div class="mb-3">
    <label>Nama Layanan</label>
    <input type="text" name="nama" class="form-control" value="<?= esc($layanan['nama']) ?>" required>
  </div>
  <div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control" required><?= esc($layanan['deskripsi']) ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
