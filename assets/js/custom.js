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

$('.admin-hapus').on('click',function(e) {
  e.preventDefault();

  // const linkdelete=$(this).attr('href');

  Swal.fire({
    title: 'Masukan Password',
    icon: 'warning',
    html:
    '<form>'+
    '<div class="form-group">'+
      '<div>'+
        '<input type="password" placeholder="Password" class="form-control" id="inputPassword">'+
      '</div>'+
    '</div>'+
  '</form>',
    showCloseButton: true,
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonText:
      'Submit',
    cancelButtonText:
      'Cancel'
  })
})

