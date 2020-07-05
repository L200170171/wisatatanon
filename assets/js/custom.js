// hapus
$('.tombol-hapus').on('click',function(e){

  e.preventDefault();

  const linkdelete=$(this).attr('href');

  Swal.fire({
      title: 'Anda Yakin',
      text: "Ingin menghapus data ini ??",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Hapus'
    }).then((result) => {
      if (result.value) {
        document.location.href=linkdelete;
      }
    })
})

// Terima Kasih di Testimoni
$('.terima-kasih').on('click',function(e){
Swal.fire({
position: 'top-center',
icon: 'success',
title: 'Terima Kasih atas testimoni yang anda berikan',
showConfirmButton: true
})
})

const flashData = $('.flash-data').data('flashdata');
    if (flashData == "delete"){
        Swal.fire ({
            icon: "success",
            text : "Data Successfully Deleted"
        });     
    }
    
    else if (flashData == "add"){
        Swal.fire ({
            icon: "success",
            text : "Data Successfully Added"
        });     
    }

    else if (flashData == "update"){
      Swal.fire ({
          icon: "success",
          text : "Data Has Been Updated"
      });     
  }

  else if (flashData == "gagal"){
    Swal.fire ({
        icon: "error",
        text : "Your image resolution is too small, make sure your image resolution is 300x600 or greater"
    });     
}
else if (flashData == "fail"){
  Swal.fire ({
      icon: "error",
      text : "Make sure your files are in jpg, png or jpeg format"
  });     
}