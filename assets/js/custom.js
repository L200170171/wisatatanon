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

<<<<<<< HEAD
$('.admin-hapus').on('click',function(e) {
  e.preventDefault();

  // const linkdelete=$(this).attr('href');

	 Swal.fire({
		title: "Input your password",
		text: "Password:",
		input: 'password',
		showCancelButton: true        
	}).then((result) => {
		if (result.value) {
		  alert("Result: " +result.value);
		}
	});
})
=======
// notif
const flashData = $('.flash-data').data('flashdata');
>>>>>>> 762ef0ddc9e3ac285bbc7309cc9368dae12e2d33

if (flashData){
    Swal.fire ({
        icon: 'success',
        title:flashData
    }); 
        
}
