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
	$query= "INSERT INTO tb_admin VALUES (NULL, '', '$nama_admin', '$jenis_kelamin_admin', '$username_admin', '$password', '$nama_foto', '$role_admin', '$status_admin')";
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


// UPDATE ADMIN
if (isset($_POST['edit_admin'])) {
	$id_admin = $_POST['id_admin'];
	$nama_admin = $_POST['nama_admin'];
	$jenis_kelamin_admin = $_POST['jenis_kelamin_admin'];
	$username_admin = $_POST['username_admin'];
	$role_admin = "TA";
	$status_admin = "Aktif";

    // SET FOTO
	if ($_FILES['foto_admin']['name'] != '') {
		$foto = $_FILES['foto_admin']['name'];
		$ext = pathinfo($foto, PATHINFO_EXTENSION);
		$nama_foto = "image_".time().".".$ext;
		$file_tmp = $_FILES['foto_admin']['tmp_name'];
		// HAPUS OLD FOTO
		$target = "foto/".$_POST['foto_now'];
		if (file_exists($target) && $_POST['foto_now'] != 'default.png') unlink($target);
		// UPLOAD NEW FOTO
		move_uploaded_file($file_tmp, '../assets/images/admin/'.$nama_foto);
	} else {
		$nama_foto = $_POST['foto_now'];
	}
		$query = "UPDATE tb_admin SET nama_admin = '$nama_admin',
											jekel_admin = '$jenis_kelamin_admin',
											username_admin = '$username_admin',
											foto_admin = '$nama_foto' WHERE id_admin = '$id_admin'";
		mysqli_query($conn, $query);
	// EDIT PARTAI
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data Admin berhasil diubah',
					icon: 'success'
				}).then((data) => {
					location.href = 'administrasi.php';
				});
			});
		</script>
	<?php }
}

// HAPUS ADMIN
if (isset($_GET['hapus_admin'])) {
	$id_admin = $_GET['id_admin'];

	$query = "DELETE FROM tb_admin WHERE id_admin = '$id_admin'";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil Dihapus',
					text: 'Data Admin berhasil dihapus',
					icon: 'success'
				}).then((data) => {
					location.href = 'administrasi.php';
				});
			});
		</script>
	<?php }
}


// UPDATE ID MITRA
if (isset($_GET['kirim_order_mitra'])) {
	$id_admin = $_GET['id_admin'];
	$id_order = $_GET['id_order'];
	$status_order = "PROCCESS";

		$query = "UPDATE tb_order SET status_order = '$status_order', mitra_id = '$id_admin' WHERE id_order = '$id_order'";
		mysqli_query($conn, $query);
	// UPDATE ID MITRA
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Membagikan Data berhasil.',
					icon: 'success'
				}).then((data) => {
					location.href = 'index.php';
				});
			});
		</script>
	<?php }
}



// MITRA

// SUBMIT ADMIN
if (isset($_POST['submit_mitra'])) {
	$nama_admin = $_POST['nama_admin'];
	$jenis_kelamin_admin = $_POST['jenis_kelamin_admin'];
	$username_admin = $_POST['username_admin'];
	$password = password_hash($username_admin, PASSWORD_DEFAULT);
	$role_admin = "TL";
	$status_admin = "Aktif";

	// SET FOTO
	$foto = $_FILES['foto_admin']['name'];
	$ext = pathinfo($foto, PATHINFO_EXTENSION);
	$nama_foto = "image_".time().".".$ext;
    $file_tmp = $_FILES['foto_admin']['tmp_name'];

    // TAMBAH DATA
	$query= "INSERT INTO tb_admin VALUES (NULL, '', '$nama_admin', '$jenis_kelamin_admin', '$username_admin', '$password', '$nama_foto', '$role_admin', '$status_admin')";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		move_uploaded_file($file_tmp, '../assets/images/admin/'.$nama_foto);
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data Mitra Berhasil ditambah!',
					icon: 'success'
				}).then((data) => {
					location.href = 'mitra.php';
				});
            });
		</script>
	<?php }
}

// UPDATE ADMIN
if (isset($_POST['edit_mitra'])) {
	$id_admin = $_POST['id_admin'];
	$nama_admin = $_POST['nama_admin'];
	$jenis_kelamin_admin = $_POST['jenis_kelamin_admin'];
	$username_admin = $_POST['username_admin'];
	$role_admin = "TL";
	$status_admin = "Aktif";

    // SET FOTO
	if ($_FILES['foto_admin']['name'] != '') {
		$foto = $_FILES['foto_admin']['name'];
		$ext = pathinfo($foto, PATHINFO_EXTENSION);
		$nama_foto = "image_".time().".".$ext;
		$file_tmp = $_FILES['foto_admin']['tmp_name'];
		// HAPUS OLD FOTO
		$target = "foto/".$_POST['foto_now'];
		if (file_exists($target) && $_POST['foto_now'] != 'default.png') unlink($target);
		// UPLOAD NEW FOTO
		move_uploaded_file($file_tmp, '../assets/images/admin/'.$nama_foto);
	} else {
		$nama_foto = $_POST['foto_now'];
	}
		$query = "UPDATE tb_admin SET nama_admin = '$nama_admin',
											jekel_admin = '$jenis_kelamin_admin',
											username_admin = '$username_admin',
											foto_admin = '$nama_foto' WHERE id_admin = '$id_admin'";
		mysqli_query($conn, $query);
	// EDIT PARTAI
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data Mitra berhasil diubah',
					icon: 'success'
				}).then((data) => {
					location.href = 'mitra.php';
				});
			});
		</script>
	<?php }
}

// HAPUS ADMIN
if (isset($_GET['hapus_mitra'])) {
	$id_admin = $_GET['id_admin'];

	$query = "DELETE FROM tb_admin WHERE id_admin = '$id_admin'";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil Dihapus',
					text: 'Data Mitra berhasil dihapus',
					icon: 'success'
				}).then((data) => {
					location.href = 'mitra.php';
				});
			});
		</script>
	<?php }
}


?>