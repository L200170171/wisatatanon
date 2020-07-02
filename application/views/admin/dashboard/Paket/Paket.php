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
        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('notif'); ?>"></div>
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
                  <th width="300px">Thumbnail</th>
                  <th width="300px">Deskripsi</th>
                  <th>Harga</th>
                  <th width="100px">Action</th>
                </tr>
                </thead>
                <?php 
                  $no = 0;
                  foreach($data as $i):
                    $no++;
                    $id = $i['ID_paket'];
                    $nama = $i['nama_paket'];
                    $keterangan = $i['keterangan'];
                    $harga = number_format($i['harga'],2,',','.');
                    $gambar = $i['gambar'];                    
                ?>
                <tbody>
                    <tr>
                        <td><?= $no ?></td>
                        <td><h3><?= $nama ?></h3><img src="<?=base_url('assets/images/paket/').$gambar;?>" width="300px" hight="200px"></td>
                        <td><?= $keterangan ?></td>
                        <td><?= 'Rp. '.$harga ?></td>
                        <td>
                          <a href="<?= base_url('admin/paket/edit/').$id ?>" class="btn btn-warning" title="edit"><span class="fa fa-pencil-square-o"></span></a>
                          <a class="btn btn-danger tombol-hapus" href="<?= base_url('admin/paket/delete/').$id ?>" title="hapus"><span class="fa fa-trash"></span></a>
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

