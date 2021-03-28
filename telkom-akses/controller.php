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


// SUBMIT SPV
if (isset($_POST['submit_spv'])) {
	$random_number = rand(100, 999);
	$kode_spv = "SPV" .$random_number. "M";
	$nama_spv = $_POST['nama_spv'];
	$telpon_spv = $_POST['telpon_spv'];
	$email_spv = $_POST['email_spv'];
	$alamat_spv = $_POST['alamat_spv'];
	$username_spv = $_POST['username_spv'];
	$password_spv = password_hash($username_spv, PASSWORD_DEFAULT);
	$role_spv = "SPV";
	$status_spv = "Aktif";

	// SET FOTO
	$foto = $_FILES['foto_spv']['name'];
	$ext = pathinfo($foto, PATHINFO_EXTENSION);
	$nama_foto = "image_".time().".".$ext;
    $file_tmp = $_FILES['foto_spv']['tmp_name'];

    // TAMBAH DATA
	$query= "INSERT INTO tb_spv VALUES (NULL, '$kode_spv', '$nama_spv', '$telpon_spv', '$email_spv', '$alamat_spv', '$nama_foto', '$status_spv')";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		//get Id sales
		$getIdInster = mysqli_insert_id($conn);
		// TAMBAH AKUN LOGIN SALES
		$queryauth = "INSERT INTO tb_auth VALUES (NULL, '$getIdInster', '$username_spv', '$password_spv', '$role_spv', '$status_spv')";
		mysqli_query($conn, $queryauth);
		move_uploaded_file($file_tmp, '../assets/images/spv/'.$nama_foto);
		plugins(); ?>
		<script>

			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data SPV Berhasil ditambah!',
					icon: 'success'
				}).then((data) => {
					location.href = 'spv.php';
				});
            });
		</script>
	<?php }
}

// UPDATE SPV
if (isset($_POST['edit_spv'])) {
	$id_spv = $_POST['id_spv'];
	$nama_spv = $_POST['nama_spv'];
	$telpon_spv = $_POST['telpon_spv'];
	$email_spv = $_POST['email_spv'];
	$alamat_spv = $_POST['alamat_spv'];
	$status_spv = $_POST['status_spv'];
	$username_spv = $_POST['username_spv'];

    // SET FOTO
	if ($_FILES['foto_spv']['name'] != '') {
		$foto = $_FILES['foto_spv']['name'];
		$ext = pathinfo($foto, PATHINFO_EXTENSION);
		$nama_foto = "image_".time().".".$ext;
		$file_tmp = $_FILES['foto_spv']['tmp_name'];
		// HAPUS OLD FOTO
		$target = "foto/".$_POST['foto_now'];
		if (file_exists($target) && $_POST['foto_now'] != 'default.png') unlink($target);
		// UPLOAD NEW FOTO
		move_uploaded_file($file_tmp, '../assets/images/spv/'.$nama_foto);
	} else {
		$nama_foto = $_POST['foto_now'];
	}
		$query = "UPDATE tb_spv SET nama_spv = '$nama_spv',
											telpon_spv = '$telpon_spv',
											email_spv = '$email_spv',
											alamat_spv = '$alamat_spv',
											foto_spv = '$nama_foto',
											status_spv = '$status_spv' WHERE id_spv = '$id_spv'";
		mysqli_query($conn, $query);
	// EDIT PARTAI
	if (mysqli_affected_rows($conn) > 0) {
		$query1 = "UPDATE tb_auth SET username_auth = '$username_spv' WHERE id_akun = '$id_spv' AND role_auth ='SPV'";
		mysqli_query($conn, $query1);
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil',
					text: 'Data SPV berhasil diubah',
					icon: 'success'
				}).then((data) => {
					location.href = 'spv.php';
				});
			});
		</script>
	<?php }
}

// HAPUS SPV
if (isset($_GET['hapus_spv'])) {
	$id_spv = $_GET['id_spv'];

	$query = "DELETE FROM tb_spv WHERE id_spv = '$id_spv'";
	mysqli_query($conn, $query);
	if (mysqli_affected_rows($conn) > 0) {
		$query2 = "DELETE FROM tb_auth  WHERE id_akun = '$id_spv' AND role_auth ='SPV'";
		mysqli_query($conn, $query2);
		plugins(); ?>
		<script>
			$(document).ready(function() {
				swal({
					title: 'Berhasil Dihapus',
					text: 'Data SPV berhasil dihapus',
					icon: 'success'
				}).then((data) => {
					location.href = 'spv.php';
				});
			});
		</script>
	<?php }
}



?>