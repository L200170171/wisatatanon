  <!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Scattered Polaroids Gallery</title>
    <meta name="description" content="Scattered Polaroids Gallery: A flat-style take on a Polaroid gallery" />
    <meta name="keywords" content="scattered polaroids, image gallery, javascript, random rotation, 3d, backface, flat design" />
    <meta name="author" content="Codrops" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('') ?>assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url('') ?>assets/css/demo.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url('') ?>assets/css/component.css">
    <link rel="shortcut icon" href="../favicon.ico">
    <script src="<?=base_url('') ?>assets/js/modernizr.min.js"></script>
  </head>
  <body>
  <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <!-- Top Navigation -->
      <section id="photostack-1" class="photostack photostack-start tanon " style="width: 100%;">
        <div>
          <figure>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/polaroid/anyaman-Mendong.jpg" alt="img01"/></a>
            <figcaption>
              <h2 class="photostack-title">anyaman Mendong</h2>
            </figcaption>
          </figure>
          <figure>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/polaroid/lereng-telomoyo.jpg" alt="img02"/></a>
            <figcaption>
              <h2 class="photostack-title">Lereng Telomoyo</h2>
            </figcaption>
          </figure>
          <figure>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/polaroid/Dolanan-Serok-Mancung.jpg" alt="img03"/></a>
            <figcaption>
              <h2 class="photostack-title">Serok Mancung</h2>
            </figcaption>
          </figure>
          <figure>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/polaroid/duta-wisata.jpg" alt="img04"/></a>
            <figcaption>
              <h2 class="photostack-title">Duta Wisata</h2>
            </figcaption>
          </figure>
          <figure>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/polaroid/grobak-sodor.jpg" alt="img05"/></a>
            <figcaption>
              <h2 class="photostack-title">Grobak Sodor</h2>
            </figcaption>
          </figure>
          <figure>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/polaroid/kuda-debog.jpg" alt="img06"/></a>
            <figcaption>
              <h2 class="photostack-title">Kuda Debog</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/polaroid/menabung-kelereng.jpg" alt="img07"/></a>
            <figcaption>
              <h2 class="photostack-title">Sambung Kelereng</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/polaroid/olahan-waluh.jpg" alt="img08"/></a>
            <figcaption>
              <h2 class="photostack-title">Olahan Waluh</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/polaroid/sabun-susu.jpg" alt="img09"/></a>
            <figcaption>
              <h2 class="photostack-title">Sabun Susu</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/polaroid/topeng-ayu.jpg" alt="img10"/></a>
            <figcaption>
              <h2 class="photostack-title">Topeng Ayu</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/polaroid/wisata-pendidikan.jpg" alt="img11"/></a>
            <figcaption>
              <h2 class="photostack-title">Wisata Pendidikan</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/polaroid/kades-pokdarwis.jpg" alt="img12"/></a>
            <figcaption>
              <h2 class="photostack-title">Kades Pokdarwis</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/polaroid/outbond.jpg" alt="img13"/></a>
            <figcaption>
              <h2 class="photostack-title">Outbound</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/polaroid/Permainan-Tangga-Manusia.jpg" alt="img13"/></a>
            <figcaption>
              <h2 class="photostack-title">Tangga Manusia</h2>
            </figcaption>
          </figure>
        </div>
      </section>
    </section><!-- End Hero -->
    <script src="<?=base_url('') ?>assets/js/classie.js"></script>
    <script src="<?=base_url('') ?>assets/js/photostack.js"></script>
    <script>
      // [].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );
      
      new Photostack( document.getElementById( 'photostack-1' ), {
        callback : function( item ) {
          //console.log(item)
        }
      } );
      new Photostack( document.getElementById( 'photostack-2' ), {
        callback : function( item ) {
          //console.log(item)
        }
      } );
      new Photostack( document.getElementById( 'photostack-3' ), {
        callback : function( item ) {
          //console.log(item)
        }
      } );
    </script>
  </body>
</html>
