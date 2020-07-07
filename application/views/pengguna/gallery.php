<!-- ======= Portfolio Section ======= -->
<section id="gallery" class="portfolio">
      <div class="container">

        <div class="section-title mt-5" data-aos="fade-up">
            <h2>Gallery</h2>
            <p>Kumpulan dokumentasi kegiatan yang kami miliki</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

          <?php foreach($galeri as $i ): ?>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap portfolio-links">
            <img src="<?php echo base_url('assets/images/galeri/').$i['nama_gambar']; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?= $i['judul'] ?></h4>
                <div class="portfolio-links">
                  <a href="<?php echo base_url('assets/images/galeri/').$i['nama_gambar']; ?>" data-gall="portfolioGallery" class="venobox" title="Perbesar Gambar"><i class="bx bx-show bx-burst bx-flip-vertical"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

        </div>
      </div>
    </section><!-- End Portfolio Section -->
    <?php $this->load->view('pengguna/templates/detailfooter'); ?>