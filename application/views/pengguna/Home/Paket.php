<!-- ======= Paket Wisata Section ======= -->
<section id="paket" class="more-services">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Paket Wisata</h2>
          <!-- <p>Kumpulan kegiatan dan paket wisata yang kami miliki</p> -->
        </div>

        <div class="row">
            <?php foreach($paket as $i): ?>
            <!-- item -->
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="card" style='background-image: url("assets/images/paket/<?= $i['gambar'] ?>");' data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body">
                        <h5 class="card-title"><?= $i['nama_paket'] ?></h5>
                        <p class="card-text" style="font-family:Playlist-Caps;"><?= $i['keterangan'] ?></p>
                        <p class="card-text">Rp. <?= number_format($i['harga'],2,',','.') ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

      </div>
    </section><!-- End Paket Section -->