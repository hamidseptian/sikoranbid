<?php 
include "../../../../assets/koneksi.php";

$bidang=$_POST['bidang'];
$nama_proker=$_POST['nama_proker'];
$id_proker=$_POST['id_proker'];
$nama_bidang=$_POST['nama_bidang'];
$id_bidang=$_POST['id_bidang'];
$kategori=$_POST['kategori'];
$status=$_POST['status'];
$ket=nl2br($_POST['ket']);
	$q1=mysqli_query($conn, "UPDATE proker set 
		 nama_proker='$nama_proker',
		 keterangan='$ket'
		 where id_proker = '$id_proker'
		")or die(mysqli_error()); 
?>

	<script type="text/javascript">
		alert('Data proker berhasil diperbaharui');
		window.location.href="../../?a=detail_proker&id=<?php echo $id_proker ?>&bidang=<?php echo $nama_bidang ?>&id_bidang=<?php echo $id_bidang ?>"

	</script>
