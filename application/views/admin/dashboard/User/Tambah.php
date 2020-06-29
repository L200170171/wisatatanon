<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah User</h1>
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
                <form action="<?= base_url("admin/user/insert")?>" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="form-group col-md-6" >
                      <label for="exampleFormControlInput1">Nama User</label>
                      <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="nama user" value="<?= set_value('nama');?>" required>
                      <?= form_error('nama','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <div class="form-group col-md-6" >
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleFormControlInput1" placeholder="password" required>
                        <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                    </div>
                  </div>
                <div class="row">
                  <div class="form-group col-md-6">
                      <label for="exampleFormControlInput1">Username</label>
                      <input type="text" class="form-control" name="username" id="exampleFormControlInput1" placeholder="username" value="<?= set_value('username');?>" required>
                      <?= form_error('username','<small class="text-danger pl-3">','</small>');?>
                  </div>
                  <div class="form-group col-md-6">
                      <label for="exampleFormControlInput1">Repassword</label>
                      <input type="password" class="form-control" name="repassword" id="exampleFormControlInput1" placeholder="ulangi password" required>
                      <?= form_error('repassword','<small class="text-danger pl-3">','</small>');?>
                  </div>
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