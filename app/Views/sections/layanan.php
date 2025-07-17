<section id="layanan" class="py-5 bg-light">
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