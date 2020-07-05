<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Artikel</h1>
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
                <form action="<?= base_url("admin/Artikel/insert")?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="exampleFormControlInput1">Judul Artikel</label>
                      <input type="text" class="form-control col-lg-5" id="exampleFormControlInput1" name="judul">
                  </div>
                  <div class="form-group">
                  <label for="exampleFormControlInput1">Isi Artikel</label>
                  <textarea class="textarea" placeholder="Place some text here" name="isi" id="summernote"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                  <img class="img-thumbnail" id="blah" height="200" width="300">
                  <div class="form-group">
                      <label for="imgInp">Thumbnail</label>
                      <input type="file" name="foto" class="form-control col-lg-5" id="imgInp">
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

<script src="<?= base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/sweetalert/sweetalert2.all.min.js"></script>
<script>

var _URL = window.URL || window.webkitURL;

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInp").change(function(e) {
    var file, img;
    var x = this;
    if ((file = this.files[0])) {
        img = new Image();
        img.onload = function() {
            if(this.width >= 600 && this.height >= 300 )
            {
              readURL(x);
            }
            else{
              Swal.fire ({
                  icon: "error",
                  text : "Your image resolution is too small, make sure your image resolution is 300x600 or greater"
              });
              var myinput = document.getElementById("imgInp");
              myinput.value = myinput.defaultValue;
              $('#blah').attr('src', '');
            }
        };
        img.onerror = function() { 
          Swal.fire ({
              icon: "error",
              text : "Make sure your files are in jpg, png or jpeg format"
          }); 
            var myinput = document.getElementById("imgInp");
            myinput.value = myinput.defaultValue;
        };
        img.src = _URL.createObjectURL(file);


    }

});

  

//$("#imgInp").change(function() {
//  readURL(this);
//});
</script>