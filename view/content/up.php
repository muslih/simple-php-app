<h2>Hal UP</h2>
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
$no = 1;

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
		<td><?= $no?></td>
		<td><?php echo $tanggal ?></td>
		<td><?php echo $no_bukti ?></td>
		<td><?php echo $uraian ?></td>
		<td><?php echo number_format($dana_up , 0, '.', ',') ?></td>

		<td><?php echo number_format($spj_up, 0, '.', ',') ?></td>
		
		<td><?php echo number_format($total.$a , 0, '.', ',')?></td>
	</tr>
	<?php
	$no++;
	$a++;
	}
	
	?>

</table>