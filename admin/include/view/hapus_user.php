<h2>Hapus User</h2>
<?php

if (isset($_GET['user'])) {
$getuser = $_GET['user'];
} else {
die ("Error. User belum dipilih! ");
}
?>

<a href="?hal=user">Kembali</a> 
<br>
<?
//proses delete berita
if (!empty($getuser) && $getuser != "") {
	$query = "DELETE FROM user WHERE
	username='$getuser'";

	$sql = mysql_query ($query);
	if ($sql) {
	echo "<h2><font color=blue>User telah berhasil
	dihapus</font></h2>";
	} else {
		echo "<h2><font color=red>User gagal
		dihapus</font></h2>";
	}
	echo "Klik <a href='?hal=user'>di sini</a>
	untuk kembali ke halaman user";
} else {
	die ("Access Ditolak");
}
?>
