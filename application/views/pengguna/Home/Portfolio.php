<!-- ======= Portfolio Section ======= -->
<section id="gallery" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Gallery</h2>
          <p>Kumpulan dokumentasi kegiatan yang kami miliki</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

          <?php foreach($galeri as $i): ?>

          <div class="col-lg-4 col-md-6 portfolio-item filter-gallery">
            <div class="portfolio-wrap">
              <img src="<?= base_url('assets/images/galeri/').$i['nama_gambar']?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?= $i['judul'] ?></h4>
                <div class="portfolio-links">
                <a href="<?= base_url('assets/images/galeri/').$i['nama_gambar']?>" data-gall="portfolioGallery" class="venobox" title="Perbesar Gambar"><i class="bx bx-show bx-burst bx-flip-vertical"></i></a>
                </div>
              </div>
            </div>
          </div>

          <?php endforeach ?>

        </div>
        <center>
          <a class="btn btn-primary" href="<?php echo (base_url('home/gallery')); ?>" role="button">Lihat Semua Gallery</a>
        </center>
      </div>
    </section><!-- End Portfolio Section -->