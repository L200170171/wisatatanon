  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Paket Wisata</h1>
          </div>
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
                    <a href="<?= base_url() ?>admin/paket/tambah">
                      <button type="button" class="btn btn-default btn-sm"><i class="fa fa-plus-square"></i> Tambah</button>
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
                  <th width="30px">No</th>
                  <th>Thumbnail</th>
                  <th>Deskripsi</th>
                  <th width="100px">Action</th>
                </tr>
                </thead>
                <?php 
                  foreach($data as $i):
                    $id = $i['ID_paket'];
                    $nama = $i['nama_paket'];
                    $keterangan = $i['ketarangan'];
                    $harga = $i['harga'];
                    $gambar = $i['gambar'];                    
                ?>
                <tbody>
                    <tr>
                        <td><?= $id ?></td>
                        <td><img src="<?=base_url('assets/images/paket/').$gambar;?>" width="300px" hight="200px"></td>
                        <td>
<<<<<<< HEAD
                          Nama &nbsp;&nbsp;: <?= $nama ?>
                          keterangan : <?= $keterangan ?>
                          harga &nbsp;&nbsp;: <?= $harga ?>
                        </td>
                        <td>
                          <a href="<?= base_url('admin/paket/edit/').$id ?>" class="btn btn-warning" title="edit"><span class="fa fa-pencil-square-o"></span></a>
                          <a class="btn btn-danger admin-hapus" href="#" title="hapus"><span class="fa fa-trash"></span></a>
=======
                        <a href="#" class="btn btn-primary" ><span class="fa fa-bars" title="detail"></span></a>
                        <a href="<?= base_url() ?>admin/paket/edit" class="btn btn-warning" title="edit"><span class="fa fa-pencil-square-o"></span></a>
                        <a class="btn btn-danger tombol-hapus" href="#" title="hapus"><span class="fa fa-trash"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>B</td>
                        <td>
                        <a href="#" class="btn btn-primary" ><span class="fa fa-bars" title="detail"></span></a>
                        <a href="<?= base_url() ?>admin/paket/edit" class="btn btn-warning" title="edit"><span class="fa fa-pencil-square-o"></span></a>
                        <a class="btn btn-danger tombol-hapus" href="#" title="hapus"><span class="fa fa-trash"></span></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>C</td>
                        <td>
                        <a href="#" class="btn btn-primary" ><span class="fa fa-bars" title="detail"></span></a>
                        <a href="<?= base_url() ?>admin/paket/edit" class="btn btn-warning" title="edit"><span class="fa  fa-pencil-square-o"></span></a>
                        <a class="btn btn-danger tombol-hapus" href="#" title="hapus"><span class="fa fa-trash"></span></a>
>>>>>>> 60a124d3a4e5efd60dd1b3617cdbbeaba63eced2
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

