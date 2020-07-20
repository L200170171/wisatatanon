
<main id="main">
<!-- ======= Artikel Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row row-centered">
      <div class="col-1">
      </div>

      <div class="col-lg-10 col-centered">
        <div class="berita text-justify">
          <!-- <h2 class="portfolio-title text-center">Desa Tanon Menggelar Upacara hari jadi yang ke 12</h2> -->
          <?php
              $judul = $data['judul'];
              $isi = $data['isi'];
              $gambar = $data['thumbnail'];
              $tanggal = date_create($data['tanggal_upload']);
            ?>
          <div class="containerimg">
           <img src="<?= base_url('assets/images/artikel/').$gambar ?>" class="img-fluid rounded mx-auto d-block">
           <div class="content"><h3 style="font-family: 'Quicksand_Bold';"><?= $judul ?></h3></div>
          </div>
          <p class="small"><u> <?=date_format($tanggal, 'jS F Y')?> </u></p>
          <div class="article fade-up">
              <?= $isi ?>
          </div>
        </div>
      </div>
      
      <div class="col-1">
      </div>
    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->