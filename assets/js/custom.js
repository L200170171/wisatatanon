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
>>>>>>> 73d70f9a436b3cb78eb1d4c0612e342e1abd040c
if (flashData){
    Swal.fire ({
        icon: 'success',
        title:flashData
    }); 
  }
// Terima Kasih di Testimoni
$('.terima-kasih').on('click',function(e){
Swal.fire({
  position: 'top-center',
  icon: 'success',
  title: 'Terima Kasih atas testimoni yang anda berikan',
  showConfirmButton: true
})
})