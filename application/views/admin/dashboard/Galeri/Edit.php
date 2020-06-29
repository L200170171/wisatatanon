<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Galeri</h1>
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
                <?php 
                  foreach($data as $i):
                    $id = $i['ID_gambar'];
                    $judul = $i['judul'];
                    $gambar = $i['nama_gambar'];
                ?>
                <form form action="<?= base_url("admin/galeri/update/").$id?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="fotoa" value="<?= $gambar ?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Judul</label>
                    <input type="text" class="form-control col-lg-4 col-md-6 col-sm-6" id="exampleFormControlInput1" value="<?= $judul ?>" name="judul">
                </div>
                <img src="<?= base_url('assets/images/galeri/').$gambar ?>" class="img-thumbnail" id="blah" height="200" width="200">
                <div class="form-group">
                    <label for="imgInp">File</label>
                    <input type="file" class="form-control-file" id="imgInp" accept="image/*" name="foto">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
                <?php endforeach ?>
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