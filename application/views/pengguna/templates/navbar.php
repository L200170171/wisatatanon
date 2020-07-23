<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="<?= base_url() ?>" class="navbar-brand text-dark" style="font-family:Playlist-Script; font-size:200%;">
          <!-- <img src="<?= base_url() ?>assets/img/logo/logo.png" alt="" class="img-fluid"> -->
          Desa Wisata Tanon
        </a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="<?php if($halaman==="home"){ echo '#hero'; }elseif($halaman==="inner"){ echo base_url(); }?>">Home</a></li>
          <?php if($halaman==="home"){?>
          <li class="drop-down"><a href="">Profil Kami</a>
            <ul>
              <li><a href="<?php echo (base_url('home/selayangPandang')); ?>">Selayang Pandang</a></li>
              <li><a href="<?php echo (base_url('home/layanan')); ?>">Layanan, Pelatihan, Paket</a></li>
              <li><a href="<?php echo (base_url('home/klien')); ?>">Klien</a></li>
            </ul>
          </li>
          <li><a href="<?= "#gallery"?>">Gallery</a></li>
          <li><a href="<?= "#paket"?>">Paket Wisata</a></li>
          <li><a href="<?= "#testimoni"?>">Testimony</a></li>
          <li><a href="<?= "#artikel"?>">Artikel</a></li>
          <li><a href="<?= "#contact"?>">Contact</a></li>
          <?php } ?>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->