<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SMK Negeri 1 Buahdua</title>
    <link rel="stylesheet" href="assets/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>

    <!-- Include header.php untuk bagian header -->
    <?php include 'assets/header.php'; ?>
    <br>
    <?php include 'assets/carousel.php'; ?>

    <!-- Section Fasilitas -->
    <section id="facilities" class="container mb-5">
      <h2 class="text-center mb-4">Fasilitas</h2>
      <div class="row">
        <div class="col-md-4 mb-3">
          <a href="laboratorium.html" class="text-decoration-none">
            <div class="card shadow h-100">
              <div class="card-body text-center">
                <i class="bi bi-laptop" style="font-size: 3rem;"></i>
                <h5 class="card-title mt-3">Laboratorium Komputer</h5>
                <p class="card-text">Laboratorium lengkap untuk mendukung pembelajaran di bidang Teknik Komputer dan Jaringan (TKJ).</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4 mb-3">
          <a href="bengkel.html" class="text-decoration-none">
            <div class="card shadow h-100">
              <div class="card-body text-center">
                <i class="bi bi-tools" style="font-size: 3rem;"></i>
                <h5 class="card-title mt-3">Bengkel Otomotif</h5>
                <p class="card-text">Fasilitas bengkel untuk praktek langsung jurusan Teknik Kendaraan Ringan Otomotif (TKRO).</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4 mb-3">
          <a href="perpustakaan.html" class="text-decoration-none">
            <div class="card shadow h-100">
              <div class="card-body text-center">
                <i class="bi bi-book" style="font-size: 3rem;"></i>
                <h5 class="card-title mt-3">Perpustakaan</h5>
                <p class="card-text">Perpustakaan yang nyaman dengan berbagai koleksi buku untuk mendukung kegiatan belajar mengajar.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- Include jurusan.php untuk Section Jurusan -->
    <?php include 'assets/jurusan.php'; ?>

    <!-- Include footer.php untuk bagian footer -->
    <?php include 'assets/footer.php'; ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>