<h2>Hal LS</h2>
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
		echo"<th colspan='5'>Jumlah</th>";
		echo"<th>Rp. ".$jlhkotor."</th>";
		echo"<th>Rp. ".$jlhpajak."</th>";
		echo"<th>Rp. ".$jlhbersih."</th>";
	echo"</tr>";
?>
</table>
