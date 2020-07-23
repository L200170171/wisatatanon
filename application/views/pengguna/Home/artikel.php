<!-- ======= More Services Section ======= -->
<section id="artikel" class="more-services">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Berita</h2>
          <p>Kumpulan Berita Terbaru tentang Desa Wisata Tanon</p>
        </div>
        <div class="row">
          <?php foreach($artikel as $i): ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("<?= base_url('assets/images/artikel/').$i['thumbnail']?>");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a><?= $i['judul']?></a></h5>
                  <p><?= $more->more($i['isi']) ?></p>
                  <div class="col text-center">
                    <a class="btn btn-sm btn-primary" href="<?= base_url('berita/detail/').$i['ID_artikel']?>">Baca Selengkapnya</a>
                  </div>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>
        <center>
          <a class="btn btn-primary mt-4" href="<?= base_url() ?>berita" role="button">Lihat Semua Berita</a>
        </center>
      </div>
    </section><!-- End More Services Section -->