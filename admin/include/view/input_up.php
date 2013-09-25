<h2>Input UP</h2>

<?php
// include 'config/koneksi.php';
//proses input berita
if (isset($_POST['input_up'])) {
	$date = date('Y-m-d');
	$no_bukti = $_POST['no_bukti'];
	$uraian = addslashes (strip_tags ($_POST['uraian']));
	$balance = addslashes (strip_tags ($_POST['balance']));
	$nilai = addslashes (strip_tags ($_POST['nilai']));
	if ($balance == "debit") {
		$dana_up = $nilai;
		$spj_up = 0;
	}elseif ($balance == "kredit") {
		$dana_up = 0;
		$spj_up =  $nilai;
	}else{
		$dana_up = 0;
		$spj_up = 0;
	}
	

	?>
	<?php

	// echo "Tanggal".$date."<br>";
	// echo "No Bukti".$no_bukti."<br>";
	// echo "Uraian".$uraian."<br>";
	// echo "Balance".$balance."<br>";
	// echo "nilai".$nilai."<br>";
	// echo "Dana UP".$dana_up."<br>";
	// echo "SPJ UP".$spj_up."<br>";

	//insert ke tabel
	$query = "INSERT INTO `tb_up`(`id_hitung`, `no_bukti`, `uraian`, `dana_up`, `spj_up`, `date`) VALUES ('','$no_bukti','$uraian','$dana_up','$spj_up','$date')";
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
	<label for="no_buki">No Bukti	</label>
	<input type="text" id="no_bukti" name="no_bukti">
	<br>
	<label for="uraian">Uraian</label>
	<textarea name="uraian" id="uraian" cols="30" rows="5"></textarea>
	<br>
	<label for="uraian">posisi</label>
	<select name="balance" id="balance">
		<option value="">---</option>
		<option value="debit">Dana UP</option>
		<option value="kredit">SPJ UP</option>
	</select>
	<input type="text" name="nilai">
	<br>
	<button name="input_up">Kirim</button>
	
</form>



<table>
	<tr>
		<td>No</td>
		<td>Tanggal</td>
		<td>Nomor Bukti</td>
		<td>URAIAN</td>
		<td>Dana UP</td>
		<td>SPJ UP</td>
		<td>Total</td>
	</tr>


<?php
$query = "	SELECT * FROM tb_up ORDER BY 'id_hitung' DESC LIMIT 0,5";
$sql = mysql_query ($query);
$a = 1;

	while ($hasil = mysql_fetch_array ($sql)) {
		$tanggal = $hasil['date'];
		$no_bukti = stripslashes ($hasil['no_bukti']);
		$uraian = stripslashes ($hasil['uraian']);
		$spj_up = stripslashes ($hasil['spj_up']);

		$dana_up = stripslashes ($hasil['dana_up']);
		// $total = $spj_up - $dana_up;

		 $total.$a = ($total.$a+$dana_up-$spj_up-1);
		


	?>
	<tr>
		<td><?php echo $a ?></td>
		<td><?php echo $tanggal ?></td>
		<td><?php echo $no_bukti ?></td>
		<td><?php echo $uraian ?></td>
		<td><?php echo number_format($dana_up , 0, '.', ',') ?></td>

		<td><?php echo number_format($spj_up, 0, '.', ',') ?></td>
		
		<td><?php echo number_format($total.$a , 0, '.', ',')?></td>
	</tr>
	<?php
	$a++;
	}
	
	?>

</table>



