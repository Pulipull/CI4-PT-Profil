<section id="tentang" class="about-section py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <!-- Gambar -->
            <div class="col-md-5 mb-4 mb-md-0">
                <img src="<?= base_url('assets/img/about.jpg') ?>" alt="About Us" class="img-fluid about-img">
            </div>

            <!-- Konten -->
            <div class="col-md-7">
                <h4 class="section-title text-dark fw-bold">About Us</h4>
                <p class="about-description">
                    <span id="short-text">
                        8Pull adalah perusahaan yang bergerak di bidang pengembangan website dengan fokus pada solusi digital yang inovatif, responsif, dan efisien.
                    </span>
                    <span id="full-text" style="display: none;">
                        Kami membantu bisnis dari berbagai skala—baik UMKM hingga perusahaan besar—untuk membangun kehadiran digital yang kuat dan berdaya saing tinggi di era transformasi digital.<br><br>
                        Didirikan dengan semangat untuk menciptakan produk digital yang bukan hanya indah secara visual, tapi juga fungsional dan ramah pengguna, tim kami terdiri dari para profesional muda yang kreatif, berpengalaman, dan berdedikasi dalam bidang desain UI/UX, pengembangan frontend dan backend, hingga integrasi sistem dan teknologi cloud.<br><br>
                        Kami percaya bahwa website bukan hanya sekadar tampilan digital, tapi merupakan representasi identitas dan kekuatan utama dalam membangun kepercayaan pelanggan. Oleh karena itu, kami mengedepankan proses kolaboratif dengan klien untuk menghadirkan solusi digital yang sesuai kebutuhan, tepat sasaran, dan scalable untuk jangka panjang.
                    </span>
                </p>
                <button id="toggle-button" class="btn btn-success rounded-pill">Selengkapnya</button>
            </div>
        </div>
    </div>
</section>

<!-- Script Toggle Selengkapnya -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const shortText = document.getElementById("short-text");
        const fullText = document.getElementById("full-text");
        const toggleBtn = document.getElementById("toggle-button");

        toggleBtn.addEventListener("click", function () {
            const isHidden = fullText.style.display === "none";

            fullText.style.display = isHidden ? "inline" : "none";
            shortText.style.display = isHidden ? "none" : "inline";
            toggleBtn.textContent = isHidden ? "Sembunyikan" : "Selengkapnya";
        });
    });
</script>