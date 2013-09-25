<h2>Input LS</h2>
<?php
include 'config/koneksi.php';
// proses input berita
if (isset($_POST['input_ls'])) {
	$date = date('Y-m-d');
	$sp2d = addslashes (strip_tags ($_POST['sp2d']));
	$akun = addslashes (strip_tags ($_POST['akun']));
	$uraian = addslashes (strip_tags ($_POST['uraian']));
	$kotor = addslashes (strip_tags ($_POST['kotor']));
	$pajak = addslashes (strip_tags ($_POST['pajak']));
	// $bersih = $kotor - $pajak;
	
	echo "Tanggal".$date."<br>";
	echo "SP2d".$sp2d."<br>";
	echo "Akun".$akun."<br>";
	echo "Uraian".$uraian."<br>";
	echo "kotor".$kotor."<br>";
	echo "Pajak".$pajak."<br>";
	echo "Bersih".$bersih."<br>";

	// insert ke tabel
	$query = "	INSERT INTO `tb_ls`(`date`, `sp2d`, `akun`, `id_hitung`, `uraian`, `kotor`, `pajak`) 
				VALUES ('$date','$sp2d',$akun,' ','$uraian','$kotor','$pajak')";
	
	

	$sql = mysql_query($query);
	if ($sql) {
		echo "<h2><font color=blue>Data telah berhasil
		ditambahkan</font></h2>";
	} else {
		echo "<h2><font color=red>Data gagal
		ditambahkan</font></h2>";
	}
}
?>

<form action="" method="POST" name="input">
	<label for="date">Tanggal</label>
	<input type="text" name="date" value="<?php echo date('Y-m-d'); ?>"placeholder="<?php echo date('Y-m-d'); ?>" disabled>
	<br>
	<label for="sp2d">No SP2D	</label>
	<input type="text" id="sp2d" name="sp2d">
	<br>
	<label for="akun">Akun	</label>
	<input type="text" id="akun" name="akun">
	<br>
	<label for="uraian">Uraian</label>
	<textarea name="uraian" id="uraian" cols="30" rows="5"></textarea>
	<br>
	<label for="kotor">Kotor</label>
	<input type="number" name="kotor" id="kotor" >
	<br>
	<label for="pajak">Pajak</label>
	<input type="number" name="pajak" id="pajak" >
	<br>
	
	
	<button name="input_ls">Kirim</button>
	
</form>



<table>
	<tr>
		<td>No</td>
		<td>Tanggal</td>
		<td>SP2D</td>
		<td>Akun</td>
		<td>Uraian</td>
		<td>Kotor</td>
		<td>Pajak</td>
		<td>Bersih</td>
	</tr>


<?php
$query = "SELECT * FROM tb_ls ORDER BY 'id_hitung' DESC LIMIT 0,5";
// $jlhkotor = "SELECT sum('kotor') from tb_ls ";
// $hsljlhkotor = msql_query($jlhkotor);
$sql = mysql_query ($query);
$a = 1;

	while ($hasil = mysql_fetch_array ($sql)) {
		$tanggal = $hasil['date'];
		$sp2d = stripslashes ($hasil['sp2d']);
		$akun = stripslashes ($hasil['akun']);
		$uraian = stripslashes ($hasil['uraian']);
		$kotor = stripslashes ($hasil['kotor']);
		$pajak = stripslashes ($hasil['pajak']);
		$bersih = $kotor - $pajak;
		// $total = 


	?>
	<tr>
		<td><?php echo $a ?></td>
		<td><?php echo $tanggal ?></td>
		<td><?php echo $sp2d ?></td>
		<td><?php echo $akun ?></td>
		<td><?php echo $uraian ?></td>
		<td><?php echo number_format($kotor, 0, '.', ',') ?></td>
		<td><?php echo number_format($pajak , 0, '.', ',') ?></td>
		<td><?php echo number_format($bersih , 0, '.', ',')?></td>
	</tr>
	<?php
	$jlhkotor += $kotor;
	$jlhpajak += $pajak;
	$jlhbersih += $bersih;
	$a++;
	}


	echo"<tr>";
		echo"<td colspan='5'>Jumlah</td>";
		echo"<td>Rp. ".$jlhkotor."</td>";
		echo"<td>Rp. ".$jlhpajak."</td>";
		echo"<td>Rp. ".$jlhbersih."</td>";
	echo"</tr>";
?>
</table>



