<h2>Hapus Berita</h2>
<?php

if (isset($_GET['id'])) {
$id_berita = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
?>

<a href="index.php">Kembali</a><br>
<?
//proses delete berita
if (!empty($id_berita) && $id_berita != "") {
$query = "DELETE FROM berita WHERE
id_berita='$id_berita'";
$sql = mysql_query ($query);
if ($sql) {
echo "<h2><font color=blue>Berita telah berhasil
dihapus</font></h2>";
} else {
echo "<h2><font color=red>Berita gagal
dihapus</font></h2>";
}
echo "Klik <a href='arsip_berita.php'>di sini</a>
untuk kembali ke halaman arsip berita";
} else {
die ("Access Denied");
}
?>
