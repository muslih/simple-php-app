
<?php
// include "config/koneksi.php";
if (isset($_GET['id'])) {
	$id_berita = $_GET['id'];
} else {
	die ("Eror bos! silahkan pilih ID terlebih dahulu ");
}

$query = "SELECT id_berita, id_kategori, judul, headline, isi,
pengirim, tanggal
FROM berita WHERE id_berita='$id_berita'";

$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
$id_berita = $hasil['id_berita'];
$id_kategori = stripslashes ($hasil['id_kategori']);
$judul = stripslashes ($hasil['judul']);
$headline = stripslashes ($hasil['headline']);
$isi = stripslashes ($hasil['isi']);
$pengirim = stripslashes ($hasil['pengirim']);
$tanggal = stripslashes ($hasil['tanggal']);

//proses edit berita
if (isset($_POST['Edit'])) {
	$id_berita = $_POST['hidberita'];
	$judul = addslashes (strip_tags ($_POST['judul']));
	$kategori = $_POST['kategori'];
	$headline = addslashes (strip_tags ($_POST['headline']));
	$isi_berita = addslashes (strip_tags ($_POST['isi']));
	$pengirim = addslashes (strip_tags ($_POST['pengirim']));

	//update berita
	$query = "UPDATE berita SET
	id_kategori='$kategori',judul='$judul',headline='$headline',
	isi='$isi_berita',pengirim='$pengirim' WHERE
	id_berita='$id_berita'";
	$sql = mysql_query ($query);
	
	if ($sql) {
		echo "<h2><font color=blue>Berita telah berhasil diedit</font></h2>";
	} else {
		echo "<h2><font color=red>Berita gagal diedit</font></h2>";
	}
}
?>


<h2>Edit Berita</h2>
<button onclick="window.location.href='/unlam-pnpb'" style="margin-bottom:15px">Ke Website</button>
<button onclick="window.location.href='?hal=tambah'" style="margin-bottom:15px">Input Berita</button>
<button onclick="window.location.href='?hal=up'" style="margin-bottom:15px">Input UP</button>
<button onclick="window.location.href='?hal=ls'" style="margin-bottom:15px">Input LS</button>
<button onclick="window.location.href='?hal=user'" style="margin-bottom:15px">Kelola User</button>

<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0"
width="700">
<tr>
	<td colspan="2">
		<a href="index.php">Halaman Depan</a> 
	</td>
</tr>

<tr>
	<td width="200">Judul Berita</td>
	<td>: <input type="text" name="judul"
	value="<? echo $judul ?>"></td>
</tr>

<tr>
	<td>Kategori</td>
	<td>:
	<select name="kategori">
	<?
	$query = "SELECT id_kategori,
	nm_kategori FROM kategori ORDER BY nm_kategori";
	$sql = mysql_query ($query);
	while ($hasil = mysql_fetch_array
	($sql)) {
	$selected = ($hasil['id_kategori']==
	$id_kategori) ? "selected" : "";
	echo "<option
	value='$hasil[id_kategori]'
	$selected>$hasil[nm_kategori]</option>";
	}
	?>
	</select></td>
</tr>
<tr>
	<td>Headline Berita</td>
	<td>: <textarea name="headline" cols="50"
	rows="4"><?=$headline?></textarea></td>
</tr>
<tr>
	<td>Isi Berita</td>
	<td>: <textarea name="isi" cols="50"
	rows="10"><?=$isi?></textarea></td>
</tr>
<tr>
	<td>Pengirim</td>
	<td>: <input type="text" name="pengirim"
	value="<?=$pengirim?>"></td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;&nbsp;
	<input type="hidden" name="hidberita"
	value="<?=$id_berita?>">
	<input type="submit" name="Edit" value="Edit Berita">&nbsp;
	<input type="reset" name="reset"
	value="Cancel"></td>
</tr>
</table>

