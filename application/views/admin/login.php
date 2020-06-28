<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        Login
    </title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>admin/plugins/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg">
                        <div class="p-5">
                            <?= $this->session->flashdata('pesan'); ?>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('admin/login/auth')?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" name="username" aria-describedby="username" placeholder="Enter Username..." <?= set_value('username');?>>
                                    <?= form_error('username','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" <?= set_value('PW');?>>
                                    <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/'); ?>admin/plugins/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>admin/plugins/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

  </body>

  </html>