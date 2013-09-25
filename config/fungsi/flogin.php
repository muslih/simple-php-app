<?php 

function cekLogin($username, $password){
	if (empty($username) OR empty($password)) {
		$pesan = "Silahkan isi semua field"
	}else{
		$query = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");
		$cek = mysql_num_rows($query);
		$data = mysql_fetch_array($query);
		if ($cek == 0) {
			echo "Username atau password salah"	;
		}else{
			$_SESSION['username'] = $username;
			$_SESSION['akses'] = $data[2];
		}
	}
}

?>