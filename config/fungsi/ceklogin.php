<?php
        session_start();
        include '../koneksi.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        // echo $username;
        // echo "<br/>";
        // echo $password;

        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $query = mysql_query($sql) or die(mysql_error());
        $data = mysql_fetch_array($query);


        if ($data['username'] !="") {
            $_SESSION['nama']=$data['nama'];
            $_SESSION['akses']=$data['akses'];
            header('location:../../admin/admin.php');
        }else{
            header("location:../../admin/index.php?pesan=Maaf kombinasi username dan password tidak cocok");
        }
        ?>