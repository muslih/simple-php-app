<h2>Halaman Dasbor</h2>
<button onclick="window.location.href='/unlam-pnpb'" style="margin-bottom:15px">Ke Website</button>
<button onclick="window.location.href='?hal=tambah'" style="margin-bottom:15px">Input Berita</button>
<button onclick="window.location.href='?hal=up'" style="margin-bottom:15px">Input UP</button>
<button onclick="window.location.href='?hal=ls'" style="margin-bottom:15px">Input LS</button>
<button onclick="window.location.href='?hal=user'" style="margin-bottom:15px">Kelola User</button>

<?php
include 'config/koneksi.php';
$query = "	SELECT	A.id_berita, 
					B.nm_kategori,
					A.judul,
					A.headline,
					A.pengirim,
					A.tanggal
			FROM 	berita A,
					kategori B 
			WHERE	A.id_kategori=B.id_kategori
			ORDER BY A.id_berita DESC LIMIT 0,5";
$sql = mysql_query ($query);
$a = 1;
?>

<table>
	<tr>
		<td>No</td>
		<td>Judul</td>
		<td colspan ="2">Aksi</td>
	</tr>
<?php
while ($hasil = mysql_fetch_array ($sql)) {
	$id_berita = $hasil['id_berita'];
	$kategori = stripslashes ($hasil['nm_kategori']);
	$judul = stripslashes ($hasil['judul']);
	$headline = nl2br(stripslashes
	($hasil['headline']));
	$pengirim = stripslashes ($hasil['pengirim']);
	$tanggal = stripslashes ($hasil['tanggal']);
?>

	<tr>
		<td>
			<?php echo $a; ?>
		</td>
		<td>
			 <?php echo $judul ?>
		</td>
		<td>
			<a href="admin.php?hal=edit&id=<?php echo $id_berita ?>;" >Edit</a>
		</td>
		<td>
			<a href="admin.php?hal=hapus&id=<?php echo $id_berita ?>" class="tanda" >Hapus</a>

		</td>
	</tr>

<?php
$a++;
}
?>

</table>