<h2>Kelola User</h2>

<button onclick="window.location.href='?hal=adduser'" style="margin-bottom:15px">Tambah User Baru</button>
<?php
include 'config/koneksi.php';
$query = "	SELECT	*
			FROM user
			ORDER BY nama DESC";
$sql = mysql_query ($query);
$a = 1;
?>

<table>
	<tr>
		<td>No</td>
		<td>Username</td>
		<td>Nama</td>
		<td>Akses</td>
		<td colspan="2">Aksi</td>
	</tr>
	<?php 
	while ($hasil = mysql_fetch_array($sql)) {
		$username = $hasil['username'];
		$nama = $hasil['nama'];
		$akses = $hasil['akses'];
	?>
	<tr>
		<td><?php echo $a;?></td>
		<td><?php echo $username;?></td>
		<td><?php echo $nama;?></td>
		<td><?php echo $akses;?></td>
		<td>
			<a href="?hal=editu&user=<?= $username?>">edit</a>
		</td>
		<td>
			<a href="?hal=hapusu&user=<?= $username?>" class="tanda">hapus</a>
		</td>
	</tr>
	<?php
	$a++;
	}
	?>
</table>