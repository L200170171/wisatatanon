<section id="form-testimoni" class="testimoni">
    <div class="container">
        <section class="section-title pt-5" data-aos="fade-up">
            <h2>Form Testimoni</h2>
            <p>Testimoni yang anda berikan akan sangat bermanfaat bagi kami</p>
        </section>
        <div class="row" data-aos="fade-up">
            <center class="col-12">
                <div class="col-12">
                    <div class="mb-3">
                        <form action="<?= base_url('home/insert_testi') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="testimoni-nama-anda">Nama Anda</label>
                                <input type="text" class="form-control col-lg-5 col-md-6 col-sm-12" id="testimoni-nama-anda" name="nama-anda">
                            </div>
                            <div class="form-group">
                                <label for="testimoni-instansi">Instansi</label>
                                <input type="text" class="form-control col-lg-5 col-md-6 col-sm-12" id="testimoni-instansi" name="instansi">
                            </div>
                            <div class="form-group">
                                <label for="testimoni">Testimoni</label>
                                <textarea name="testimoni" class="form-control col-lg-5 col-md-6 col-sm-12" id="testimoni" placeholder="Kesan dan pesan yang anda rasakan"></textarea>
                            </div>
                            <button class="btn btn-primary terima-kasih" type="submit">Submit</button>
                        </form>
                    </div>  
                </div>
            </center>
        </div>
    </div>
</section>
<?php $this->load->view('pengguna/templates/detailfooter'); ?>