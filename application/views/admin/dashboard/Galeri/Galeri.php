  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Galeri</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-12">

          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Judul Tabel</h3>
              <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a href="<?= base_url() ?>admin/galeri/tambah">
                      <button type="button" class="btn btn-default btn-sm"><i class="fa fa-plus-square"></i> Tombol</button>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>A</td>
                        <td>
                        <a href="#" class="badge badge-primary">Detail</a>
                        <a href="<?= base_url() ?>admin/galeri/edit" class="badge badge-warning">Edit</a>
                        <a href="#" class="badge badge-danger tombol-hapus">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>B</td>
                        <td>
                        <a href="#" class="badge badge-primary">Detail</a>
                        <a href="<?= base_url() ?>admin/galeri/edit" class="badge badge-warning">Edit</a>
                        <a href="#" class="badge badge-danger tombol-hapus">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>C</td>
                        <td>
                        <a href="#" class="badge badge-primary">Detail</a>
                        <a href="<?= base_url() ?>admin/galeri/edit" class="badge badge-warning">Edit</a>
                        <a href="#" class="badge badge-danger tombol-hapus">Delete</a>
                        </td>
                    </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

