<?php

function plugins() { ?>
	<link rel="stylesheet" href="../assets/plugins/bootstrap-more/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/dist/css2/components.css">
	<script src="../assets/dist/jquery.min.js"></script>
	<script src="../assets/dist/sweetalert/sweetalert.min.js"></script>
<?php }
require('../koneksi.php');


// SUBMIT ADMIN
if (isset($_POST['submit_admin'])) {
	$nama_admin = $_POST['nama_admin'];
	$jenis_kelamin_admin = $_POST['jenis_kelamin_admin'];
	$username_admin = $_POST['username_admin'];
	$password = password_hash($username_admin, PASSWORD_DEFAULT);
	$role_admin = "TA";
	$status_admin = "Aktif";

	// SET FOTO
	$foto = $_FILES['foto_admin']['name'];
	$ext = pathinfo($foto, PATHINFO_EXTENSION);
	$nama_foto = "image_".time().".".$ext;
    $file_tmp = $_FILES['foto_admin']['tmp_name'];

    // TAMBAH DATA
	$query= "INSERT INTO tb_admin VALUES (NULL, '$nama_admin', '$jenis_kelamin_admin', '$username_admin', '$password', '$nama_foto', '$role_admin', '$status_admin')";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		move_uploaded_file($file_tmp, '../assets/images/admin/'.$nama_foto);
		plugins(); ?>
		<script>

			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data Admin Berhasil ditambah!',
					icon: 'success'
				}).then((data) => {
					location.href = 'administrasi.php';
				});
            });
		</script>
	<?php }
}
?>