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
			WHERE	A.id_kategori=B.id_kategori && B.nm_kategori = 'rkak'
			ORDER BY A.id_berita DESC LIMIT 0,5";
$sql = mysql_query ($query);

while ($hasil = mysql_fetch_array ($sql)) {
	$id_berita = $hasil['id_berita'];
	$kategori = stripslashes ($hasil['nm_kategori']);
	$judul = stripslashes ($hasil['judul']);
	$headline = nl2br(stripslashes
	($hasil['headline']));
	$pengirim = stripslashes ($hasil['pengirim']);
	$tanggal = stripslashes ($hasil['tanggal']);
?>

<article>
	<h2>
	<a href="?hal=detail&id=<?php echo $id_berita ?>"> <?php echo $judul ?></a>
	</h2>
	<p class="meta">
		Dikirim Oleh : <span><?php echo $pengirim ?></span> pada tanggal : <span><?php echo $tanggal ?></span> dalam kategori : <span><?php echo $kategori ?></span>
	</p>
	<p>
		<?php echo $headline ?>
	</p>
</article>


<?php
}
?>