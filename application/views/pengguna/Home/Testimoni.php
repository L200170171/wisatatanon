<!-- ======= Testimonials Section ======= -->
<section id="testimoni" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Testimonial</h2>
          <p></p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">
          
        <?php foreach($testi as $i):?>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3><?= $i['nama'] ?></h3>
              <h4><?= $i['instansi'] ?></h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?= $i['testimoni'] ?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
        
        <?php endforeach; ?>

        </div>
      </div>
      <center>
        <a href="<?= base_url()?>home/formtestimoni" class="btn btn-primary mt-3" role="button">Berikan Testimoni</a>
      </center>
    </section><!-- End Testimonials Section -->