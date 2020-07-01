<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Paket</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-body pad">
              <div class="mb-3">
                <form action="<?= base_url("admin/paket/insert")?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Nama Paket</label>
                      <input type="text" class="form-control col-lg-4 col-md-6 col-sm-6" id="exampleFormControlInput1" name="nama">
                      <?= form_error('nama','<small class="text-danger pl-3">','</small>');?>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlFile1">Deskripsi Paket</label>
                      <textarea name="deskripsi" class="form-control col-lg-4 col-md-6 col-sm-6" id="Textarea" placeholder="Deskripsi Paket" required></textarea>
                      <?= form_error('deskripsi','<small class="text-danger pl-3">','</small>');?>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Harga</label>
                      <input type="number" class="form-control col-lg-4 col-md-6 col-sm-6" id="exampleFormControlInput1" name="harga">
                      <?= form_error('harga','<small class="text-danger pl-3">','</small>');?>
                  </div>
                  <img class="img-thumbnail" id="blah" height="200" width="200">
                  <div class="form-group">
                      <label for="imgInp">File</label>
                      <input type="file" class="form-control" id="imgInp" name="foto" required>
                  </div>
                  <button class="btn btn-primary" type="submit">Submit</button>
                </form>
                
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script src="<?= base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
<script>
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
</script>