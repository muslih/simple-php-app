<?php
include 'config/koneksi.php';

if (isset($_GET['id'])) {
	$id_berita = $_GET['id'];
} else {
	die ("Error. No Id Selected! ");
}
?>

<?
$query = "	SELECT	A.id_berita, 
					B.nm_kategori,
					A.judul,
					A.isi,
					A.pengirim, 
					A.tanggal
			FROM 	berita A, 
					kategori B 
			WHERE 	A.id_kategori=B.id_kategori && 
					A.id_berita='$id_berita'";

$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
$id_berita = $hasil['id_berita'];
$kategori = stripslashes ($hasil['nm_kategori']);
$judul = stripslashes ($hasil['judul']);
$isi = nl2br(stripslashes ($hasil['isi']));
$pengirim = stripslashes ($hasil['pengirim']);
$tanggal = stripslashes ($hasil['tanggal']);
//
//tampilkan berita
// echo "<font size=5 color=blue>$judul</font><br>";
// echo "<small>Berita dikirimkan oleh <b>$pengirim</b>
// pada tanggal <b>$tanggal</b> dalam kategori
// <b>$kategori</b></small>";
// echo "<p>$isi</p>";
?>

<article>
	<h2><?php echo $judul?></h2>
	<p class="meta">
		Dikirim Oleh : <span><?php echo $pengirim ?></span> pada tanggal : <span><?php echo $tanggal ?></span> dalam kategori : <span><?php echo $kategori ?></span>
	</p>
	<p>
		<?php echo $isi ?>
	</p>
</article>