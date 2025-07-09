<!-- views/layanan/index.php -->
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3><?= $title ?></h3>
    <a href="/layanan/create" class="btn btn-success">+ Tambah Layanan</a>
</div>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success"><?= session()->getFlashdata('pesan') ?></div>
<?php endif ?>

<table class="table table-striped table-hover table-bordered shadow-sm">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Nama Layanan</th>
            <th>Deskripsi</th>
            <th style="width:150px">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach ($layanan as $l) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= esc($l['nama']) ?></td>
            <td><?= esc($l['deskripsi']) ?></td>
            <td>
                <a href="/layanan/edit/<?= $l['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="/layanan/delete/<?= $l['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
