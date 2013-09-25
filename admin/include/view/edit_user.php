<h2>Edit User</h2>
<?php
// include "config/koneksi.php";
if (isset($_GET['user'])) {
	$getuser = $_GET['user'];
} else {
	die ("Eror bos! silahkan pilih username terlebih dahulu ");
}

$query = "SELECT * FROM user WHERE username='$getuser'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);

$username = stripslashes ($hasil['username']);
$nama = stripslashes ($hasil['nama']);
$pass = stripslashes ($hasil['password']);
$akses = stripslashes ($hasil['akses']);

//proses edit input user
if (isset($_POST['edit_user'])) {
	$nama = addslashes (strip_tags ($_POST['nama']));
	$user = addslashes (strip_tags ($_POST['user']));
	$pass = addslashes (strip_tags ($_POST['password']));
	$akses = addslashes (strip_tags ($_POST['akses']));
	

	//insert kedalam table user
	$query = "UPDATE user
	SET username='$user',nama='$nama',password='$pass',akses='$akses' WHERE username='$getuser'";
	$sql = mysql_query ($query);
	if ($sql) {
	echo "<h2><font color=blue>User <strong>".$user."</strong> telah berhasil ditambahkan</font></h2>";
	} else {
	echo "<h2><font color=red>User <strong>".$user."</strong> gagal
	ditambahkan</font></h2>";
	}
}
// echo "nama".$_POST[nama];
// echo "user".$_POST[user];
// echo "pass".$_POST[password];
// echo "akses".$_POST[akses];
?>

<button onclick="window.location.href='?hal=user'" style="margin-bottom:15px">Kembali</button>
<br>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0"
width="700">
<tr>
<td colspan="2"><h2>Input Berita</h2></td>
</tr>
<tr>
	<td width="200">
		<label for="">Nama</label>
	</td>
	<td>: 
		<input type="text" name="nama" value="<?= $nama ?>"required>
	</td>
</tr>
<tr>
	<td width="200">
		<label for="user">User</label>
	</td>
	<td>: 
		<input type="user" name="user" value="<?= $username ?>"	required> (tidak boleh menggunakan spasi)
	</td>
</tr>
<tr>
	<td width="200">
		<label for="password">Password</label>
	</td>
	<td>: 
		<input type="password" name="password" value="<?= $pass ?>" required>
	</td>
</tr>
<tr>
	<td width="200">
		<label for="password">Hak Akses</label>
	</td>
	<td>: 
		<input  value="<?= $akses ?>" disabled>
	</td>
</tr>
<tr>
	<td>Ubah Hak Akses</td>
	<td>:
	<select name="akses">
	<?
	// $query = "SELECT akses
	// FROM user";
	// $sql = mysql_query ($query);
	// while ($hasil = mysql_fetch_array ($sql)) {
	// 	echo "<option value='$hasil[akses]'>$hasil[akses]</option>";
	// }
	?>
		<option value="admin">Admin</option>
		<option value="user">User</option>
	</select required></td>
</tr>


</tr>
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;&nbsp;<input type="submit" name="edit_user" value="edit User">&nbsp;
	<input type="reset" name="reset" value="Cancel">
	</td>
</tr>
</table>
</FORM>