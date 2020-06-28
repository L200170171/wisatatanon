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
                  <th width='20px'>No</th>
                  <th width='200px'>Gambar</th>
                  <th>Judul</th>
                  <th width='100px'>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $no=0;
                  foreach($data as $i):
                    $no++;
                    $id=$i['ID_gambar'];
                    $judul=$i['judul'];
                    $gambar=$i['nama_gambar'];
                    $tanggal=$i['tanggal_upload'];
                    $author=$i['author'];
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><img src="<?= base_url('assets/images/galeri/').$gambar ?>" alt="<?= $judul ?>" width="200" height="200px"></td>
                        <td>
                          <b>Judul &ensp;&nbsp;:</b> <?= $judul ?><br>
                          <b>Author &nbsp;:</b> <?= $author ?><br>
                          <b>Publish :</b> <?= $tanggal ?>
                        </td>
                        <td class="text-center">
                          <a href="<?= base_url('admin/galeri/edit/').$id?>" class="badge badge-warning">Edit</a>
                          <a href="<?= base_url('admin/galeri/delete/').$id ?>" class="badge badge-danger tombol-hapus">Delete</a>
                        </td>
                    </tr>
                  <?php endforeach; ?>
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

