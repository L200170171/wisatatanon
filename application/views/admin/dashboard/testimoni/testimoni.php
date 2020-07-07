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
        <div class="col-12">

          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Judul Tabel</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Instansi</th>
                  <th>Testimoni</th>
                  <th>Tanggal</th>
                  <th width="75">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 0;
                foreach($testi as $i):
                  $no++;
                  $id = $i['ID_testimoni'];
                  $nama = $i['nama'];
                  $instansi = $i['instansi'];
                  $isi = $i['testimoni'];
                  $tgl = date_create($i['tanggal']);
                  ?>
                  <tr>
                      <td><?= $no ?></td>
                      <td><?= $nama ?></td>
                      <td><?= $instansi ?></td>
                      <td><?= $isi ?></td>
                      <td><?= date_format($tgl, 'jS F Y') ?></td>
                      <td>
                        <a href="<?= base_url('admin/testimoni/publish/').$id?>" class="btn btn-primary <?php if($publik->cek($id) > 0){echo 'disabled';}?>" data-toggle="tooltip" title="Publish" ><span class="fa fa-check"></span></a>
                        <a href="<?= base_url('admin/testimoni/delete/').$id ?>" class="btn btn-danger tombol-hapus" data-toggle="tooltip" title="hapus"><span class="fa fa-trash"></span></a>
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

      <div class="row">
        <div class="col-12">

          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tabel Publish</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Instansi</th>
                  <th>Testimoni</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 0;
                foreach($publik->t_data() as $i):
                  $no++;
                  $id = $i['ID_testimoni'];
                  $nama = $i['nama'];
                  $instansi = $i['instansi'];
                  $isi = $i['testimoni'];
                  $tgl = date_create($i['tanggal']);
                  ?>
                  <tr>
                      <td><?= $no ?></td>
                      <td><?= $nama ?></td>
                      <td><?= $instansi ?></td>
                      <td><?= $isi ?></td>
                      <td><?= date_format($tgl, 'jS F Y') ?></td>
                      <td>
                        <a href="<?= base_url('admin/testimoni/unpublish/').$id ?>" class="btn btn-danger tombol-hapus" data-toggle="tooltip" title="hapus"><span class="fa fa-trash"></span></a>
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

