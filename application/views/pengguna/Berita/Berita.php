<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style="background-color:white;">
      <div class="container">
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="berita" class="portfolio-details">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Berita</h2>
        </div>
        <form action="<?= base_url('berita')?>" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control col-md-3" name="keyword" placeholder="Cari Berita" autocomplete="off" autofocus>
                <div class="input-group-append">
                    <input class="btn btn-primary" type="submit" name="submit" value="Cari">
                </div>
            </div>
        </form>
        <?php if($this->session->userdata('key')){
            echo "<h6> Menampilkan pencarian: ".$this->session->userdata('key')."</h6>";
        }?>
        <div class="row">
        <?php
            $data = $more->get_tabel($key);
            foreach ($data->result() as $row) :
                $judul = $row->judul;
                $isi = $row->isi;
                $tgl = date_create($row->tanggal_upload);
                $thumb = $row->thumbnail;
        ?>
            <!-- items -->
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center">
                            <img src="<?= base_url('assets/images/artikel/').$thumb ?>" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $judul ?></h5>
                                <p class="card-text"><?= $more->more($isi);?></p>
                                <p class="card-text"><small class="text-muted"><?= date_format($tgl, 'jS F Y') ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach?>
        </div>
        <div class="row">
            <div class="col">
                <?php echo $pagination; ?>
            </div>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  <?php $this->load->view('pengguna/templates/detailfooter'); ?>