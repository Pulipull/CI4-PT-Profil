<section id="beranda" class="hero d-flex align-items-center" style="min-height: 100vh;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-center text-md-start">
        <h1 id="typed-text" class="display-5 fw-bold text-white mb-3"></h1>
        <p class="text-white-50 mb-4" data-aos="fade-up" data-aos-delay="600">
           Kami adalah perusahaan teknologi yang menyediakan layanan pengembangan website, aplikasi web, serta solusi digital inovatif yang dirancang khusus untuk kebutuhan bisnis modern Anda.
        </p>
        <div class="d-flex gap-3 justify-content-center justify-content-md-start" data-aos="fade-up" data-aos-delay="800">
          <a href="#" class="btn btn-light btn-lg rounded-pill px-4">Read more</a>
          <a href="#" class="btn btn-primary btn-lg rounded-pill px-4">Contact us</a>
        </div>
      </div>
      <div class="col-md-6 text-center d-none d-md-block">
        <img src="<?= base_url('assets/img/komputer.png') ?>" class="img-fluid" alt="Hero Image" data-aos="zoom-in" data-aos-delay="400">
      </div>
    </div>
  </div>
</section>

<script>
  const text = "Bangun Website Andal Bersama Tim Ahli Kami";
  const typingElement = document.getElementById("typed-text");
  let i = 0;

  function typeEffect() {
    if (i < text.length) {
      typingElement.innerHTML += text.charAt(i);
      i++;
      setTimeout(typeEffect, 50); // kecepatan ketik
    }
  }

  window.addEventListener('DOMContentLoaded', () => {
    typeEffect();
  });
</script>
