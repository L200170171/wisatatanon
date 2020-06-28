  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Artikel</h1>
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
                    <a href="<?= base_url() ?>admin/artikel/tambah">
                      <button type="button" class="btn btn-default btn-sm"><i class="fa fa-plus-square"></i>Tambah</button>
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
                  <th width="30">No</th>
                  <th>Judul</th>
                  <th>Tanggal Publish</th>
                  <th>Author</th>
                  <th class="text-center" width="150">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $no=0;
                  foreach($data as $i):
                    $no++;
                    $id=$i['ID_artikel'];
                    $judul=$i['judul'];
                    $gambar=$i['thumbnail'];
                    $tanggal=date_create($i['tanggal_upload']);
                    $author=$i['author'];
                ?>
                    <tr>
<<<<<<< HEAD
                        <td><?= $no ?></td>
                        <td><?= $judul ?></td>
                        <td><?= date_format($tanggal, 'jS F Y') ?></td>
                        <td><?= $author ?></td>
                        <td class="text-center">
=======
                        <td>1</td>
                        <td>A</td>
                        <td>
                        <a href="#" class="badge badge-primary">Detail</a>
                        <a href="<?= base_url() ?>admin/artikel/edit" class="badge badge-warning">Edit</a>
                        <a href="#" class="badge badge-danger tombol-hapus">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>B</td>
                        <td>
                        <a href="<?= base_url() ?>admin/artikel/detail" class="badge badge-primary">Detail</a>
                        <a href="<?= base_url() ?>admin/artikel/edit" class="badge badge-warning">Edit</a>
                        <a href="#" class="badge badge-danger tombol-hapus">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>C</td>
                        <td>
>>>>>>> 68a964a302a738fc275d9bf4663821fcc7fb9b8a
                        <a href="#" class="badge badge-primary">Detail</a>
                        <a href="<?= base_url() ?>admin/artikel/edit" class="badge badge-warning">Edit</a>
                        <a href="#" class="badge badge-danger tombol-hapus">Delete</a>
                        </td>
                    </tr>
                  <?php endforeach ?>
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

