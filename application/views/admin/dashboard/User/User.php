  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User</h1>
          </div><!-- /.col -->
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
                    <a href="<?= base_url() ?>admin/user/tambah">
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
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $no=0;
                  foreach ($data as $i) :
                    $no++;
                    $id=$i['ID_User'];
                    $nama=$i['Nama'];
                    $un=$i['Username'];
                    $pw=$i['Password'];    
                ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $nama; ?></td>
                    <td><?= $un; ?></td>
                    <td><?= $pw; ?></td>
                    <td>
                      <a href="<?= base_url('admin/user/edit/').$id ?>" class="btn btn-warning" ><span class="fa fa-pencil-square-o"></span></a>
                      <a class="btn btn-danger admin-hapus" href="<?= base_url('admin/user/delete/').$id ?>"><span class="fa fa-trash "></span></a>
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

