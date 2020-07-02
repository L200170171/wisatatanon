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
          <li><a href="<?= base_url('home#hero')?>">Home</a></li>
          <li class="drop-down"><a href="">Profil Kami</a>
            <ul>
              <li><a href="<?php echo (base_url('home/selayangPandang')); ?>">Selayang Pandang</a></li>
              <li><a href="<?php echo (base_url('home/layanan')); ?>">Layanan, Pelatihan, Paket</a></li>
              <li><a href="<?php echo (base_url('home/klien')); ?>">Klien</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url("home#gallery")?>">Gallery</a></li>
          <li><a href="<?= base_url("home#paket")?>">Paket Wisata</a></li>
          <li><a href="<?= base_url("home#testimoni")?>">Testimony</a></li>
          <li><a href="<?= base_url("home#artikel")?>">Artikel</a></li>
          <li><a href="<?= base_url("home#contact")?>">Contact</a></li>
          <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
        </ul>
      </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->