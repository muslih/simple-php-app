<?php 
$host = localhost;
$user = root;
$pass = gulnar;
$db = unlam_pnpb;


$koneksi = mysql_connect($host, $user, $pass);
if ($koneksi) {
	$buka = mysql_select_db($db);
	if (!$buka) {
		die ("Database tidak dapat dibuka");
	}
} else {
	die ("MYSQL tdk terhubung");
}
?>