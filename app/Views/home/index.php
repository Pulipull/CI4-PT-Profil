<section class="py-5 bg-white text-center">
    <div class="container">
        <h1 class="display-5 fw-bold">Selamat Datang di PT 8Pull's</h1>
        <p class="lead mt-3">Kami adalah perusahaan teknologi yang bergerak di bidang pengembangan web, DevOps, dan solusi digital lainnya.</p>
        <img src="/assets/img/hero.jpg" alt="Ilustrasi teknologi" class="img-fluid my-4" style="max-height:300px">
        <a href="/kontak" class="btn btn-primary">Hubungi Kami</a>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Layanan Kami</h2>
        <div class="row">
            <?php if (!empty($layanan)) : ?>
                <?php foreach ($layanan as $l) : ?>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-tools me-2"></i><?= esc($l['nama']) ?></h5>
                                <p class="card-text"><?= esc($l['deskripsi']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <div class="text-center mt-4">
                    <a href="/layanan" class="btn btn-outline-dark">Lihat Semua Layanan</a>
                </div>
            <?php else : ?>
                <div class="col-12 text-center">
                    <p>Belum ada layanan yang ditambahkan.</p>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>
