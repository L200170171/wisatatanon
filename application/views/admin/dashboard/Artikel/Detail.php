
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
            foreach($data as $i):
              $judul = $i['judul'];
              $isi = $i['isi'];
              $gambar = $i['thumbnail'];
              $tanggal = date_create($i['tanggal_upload']);

            ?>
          <div class="containerimg">
           <img src="<?= base_url('assets/images/artikel/').$gambar ?>" class="img-fluid pb-5 rounded mx-auto d-block">
           <div class="content"><h3><?= $judul ?></h3></div>
          </div>
          <p class="small"><u> <?=date_format($tanggal, 'jS F Y')?> </u></p>
          <div class="article fade-up">
              <?= $isi ?>
          </div>
          <?php endforeach ?>
        </div>
      </div>

      <div class="col-1">
      </div>
    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->