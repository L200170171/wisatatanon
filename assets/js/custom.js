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
  // e.preventDefault();

  // const linkdelete=$(this).attr('href');

  Swal.fire({
    title: 'Enter your password',
    input: 'password',
    inputPlaceholder: 'Enter your password',
    showCancelButton: true,
    confirmButtonText: 'Confirm',
    cancelButtonColor: '#d33',
    inputAttributes: {
      maxlength: 10,
      autocapitalize: 'off',
      autocorrect: 'off'
    }
  })
  
  if (password) {
    Swal.fire(`Entered password: ${password}`)
  }
})