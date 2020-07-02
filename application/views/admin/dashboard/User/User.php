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
        <!-- trigger swal -->
        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('data'); ?>"></div> 
        <!-- ------- -->
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
                      <a data-toggle="modal" data-target="#edit<?= $id;?>" class="btn btn-warning" ><span class="fa fa-pencil-square-o"></span></a>
                      <a class="btn btn-danger" data-toggle="modal" data-target="#del<?= $id;?>"><span class="fa fa-trash "></span></a>
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
<!-- modal hapus -->

<?php
  $no=0;
  foreach ($data as $i) :
    $id=$i['ID_User'];
?>
  <div class="modal fade" id="del<?= $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Password Confirmation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-horizontal" action="<?php echo site_url('admin/user/delete/'),$id ;?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group row">
                <label for="inputUserName" class="col-sm-4 control-label">Password</label>
                <div class="col-sm-7">
                  <input type="password" name="pass" class="form-control" id="inputUserName" placeholder="Enter Your Password" required>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!--Modal Edit-->
  <div class="modal fade" id="edit<?= $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Password Confirmation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-horizontal" action="<?php echo site_url('admin/user/edit/'),$id ;?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group row">
                <label for="inputUserName" class="col-sm-4 control-label">Password</label>
                <div class="col-sm-7">
                  <input type="password" name="pass" class="form-control" id="inputUserName" placeholder="Enter Your Password" required>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach ?>

<script src="<?= base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/sweetalert/sweetalert2.all.min.js"></script>
<?php if ($this->session->flashdata('data')=='error'):?>
  <script>
    const flashData = $('.flash-data').data('flashdata');
    if (flashData){
        Swal.fire ({
            icon: flashData,
            title: flashData,
            text : "Access Denied"
        });     
    }
  </script>
<?php endif; ?>
<?php if ($this->session->flashdata('data')=='success'):?>
  <script>
    const flashData = $('.flash-data').data('flashdata');
    if (flashData){
        Swal.fire ({
            icon: flashData,
            title: flashData,
            text : "Data Successfully Deleted"
        });     
    }
  </script>
<?php endif; ?>
<?php if ($this->session->flashdata('data')=='add'):?>
  <script>
    const flashData = $('.flash-data').data('flashdata');
    if (flashData){
        Swal.fire ({
            icon: "success",
            text : "Data Successfully Added"
        });     
    }
  </script>
<?php endif; ?>
<?php if ($this->session->flashdata('data')=='update'):?>
  <script>
    const flashData = $('.flash-data').data('flashdata');
    if (flashData){
        Swal.fire ({
            icon: "success",
            text : "Data Has Been Updated"
        });     
    }
  </script>
<?php endif; ?>


