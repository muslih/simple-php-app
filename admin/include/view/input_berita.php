
<?php
// include 'config/koneksi.php';
//proses input berita
if (isset($_POST['Input'])) {
$judul = addslashes (strip_tags ($_POST['judul']));
$kategori = $_POST['kategori'];
$headline = addslashes (strip_tags ($_POST['headline']));
$isi_berita = addslashes (strip_tags ($_POST['isi']));
$pengirim = addslashes (strip_tags ($_POST['pengirim']));
//insert ke tabel
$query = "INSERT INTO berita
VALUES('','$kategori','$judul','$headline','$isi_berita','$pengirim',
now())";
$sql = mysql_query ($query);
if ($sql) {
echo "<h2><font color=blue>Berita telah berhasil
ditambahkan</font></h2>";
} else {
echo "<h2><font color=red>Berita gagal
ditambahkan</font></h2>";
}
}
?>
<h2>Input berita</h2>

<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0"
>
<tr>
<td colspan="2"><a href="index.php">Halaman Depan</a> </td>
</tr>
<tr>
<td >Judul Berita</td>
<td>: <input type="text" name="judul"
></td>
</tr>
<tr>
<td>Kategori</td>
<td>:
<select name="kategori">
<?
$query = "SELECT id_kategori, nm_kategori
FROM kategori ORDER BY nm_kategori";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array ($sql)) {
echo "<option
value='$hasil[id_kategori]'>$hasil[nm_kategori]</option>";
}
?>
</select></td>
</tr>
<tr>
<td>Headline Berita</td>
<td>: <textarea name="headline" cols="23" rows="4">
</textarea></td>
</tr>
<tr>
<td>Isi Berita</td>
<td>: <textarea name="isi" cols="23" rows="10">
</textarea></td>
</tr>
<tr>
<td>Pengirim</td>
<td>: <input type="text" name="pengirim"  value="<?=$_SESSION['nama'] ?>"disabled>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;<input type="submit" name="Input"
value="Input Berita">&nbsp;
<input type="reset" name="reset" value="Cancel">
</td>
</tr>
</table>
</FORM>
