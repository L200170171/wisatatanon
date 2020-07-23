<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style="background-color:white;">
      <div class="container">
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="berita" class="more-services">
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
            foreach ($data->result() as $row) :
                $id=$row->ID_artikel;
                $judul = $row->judul;
                $isi = $row->isi;
                $tgl = date_create($row->tanggal_upload);
                $thumb = $row->thumbnail;
        ?>
            <!-- items -->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="card" style='background-image: url("<?= base_url('assets/images/artikel/').$thumb ?>"); min-height:392px'>
                        <div class="card-body">
                            <h5 class="card-title"><a><?= $judul?></a></h5>
                            <p><?= $more->more($isi);?></p>
                            <div class="col text-center">
                                <a class="btn btn-sm btn-primary" href="<?= base_url('berita/detail/').$id?>">Baca Selengkapnya</a>
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