
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs" style="background-color:white;">
  <div class="container">

    <!-- <div class="d-flex justify-content-between align-items-center">
      <h2>Berita</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Berita</li>
      </ol>
    </div> -->

  </div>
</section>

<!-- End Breadcrumbs -->
<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row row-centered">
      <div class="col-1">
      </div>
      <?php
        foreach($data as $i):
          $id = $i['ID_artikel'];
          $judul = $i['judul'];
          $isi = $i['isi'];
          $gambar = $i['thumbnail'];
          $tanggal = date_create($i['tanggal_upload']);
        ?>
      <div class="col-lg-10 col-centered">
        <div class="berita text-justify">
          <!-- <h2 class="portfolio-title text-center">Desa Tanon Menggelar Upacara hari jadi yang ke 12</h2> -->
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
      <?php endforeach ?>
      <div class="col-1">
      </div>
    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<?php $this->load->view('pengguna/templates/detailfooter'); ?>