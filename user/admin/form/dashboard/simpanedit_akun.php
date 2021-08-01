<?php 
include "../../../../assets/koneksi.php";

session_start();
$id = $_SESSION['id_user'];

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

			
	$q1=mysqli_query($conn, "UPDATE user set 
		username='$username',
		password='$password'
		where id_user='$id'
		
		
		")or die(mysqli_error()); 
?>

	<script type="text/javascript">
		alert('Akun anda berhasil diperbaharui');
		window.location.href="../../"

	</script>