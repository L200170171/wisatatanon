<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Artikel</h1>
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
                <form action="<?= base_url("admin/Artikel/insert")?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Judul Artikel</label>
                      <input type="text" class="form-control col-lg-4 col-md-6 col-sm-6" id="exampleFormControlInput1" name="judul">
                  </div>
                  <div class="form-group">
                  <label for="exampleFormControlInput1">Isi Artikel</label>
                  <textarea class="textarea" placeholder="Place some text here" name="isi" id="summernote"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlFile1">Thumbnail</label>
                      <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
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

  