<section>
    
    <?php 
    	include '../config/koneksi.php';
    	if ($_GET['hal']=='' || $_GET['hal']== '') {
	    	include 'include/view/awal.php';
	    }elseif ($_GET['hal']=='edit') {
	    	include 'include/view/edit_berita.php';
	    }elseif ($_GET['hal']=='tambah') {
	    	include 'include/view/input_berita.php';
	    }elseif ($_GET['hal']=='hapus') {
	    	include 'include/view/hapus_berita.php';
	    }elseif ($_GET['hal']=='up') {
	    	include 'include/view/input_up.php';
	    }elseif ($_GET['hal']=='ls') {
	    	include 'include/view/input_ls.php';
	    }elseif ($_GET['hal']=='user') {
	    	include 'include/view/user.php';
	    }elseif ($_GET['hal']=='adduser') {
	    	include 'include/view/input_user.php';
	    }elseif ($_GET['hal']=='editu') {
	    	include 'include/view/edit_user.php';
	    }elseif ($_GET['hal']=='hapusu') {
	    	include 'include/view/hapus_user.php';
	    }elseif ($_GET['hal']=='logout') {
	    	include '../config/fungsi/logout.php';
	    }else{
	    	include 'view/content/awal.php';
	    }
	    ?>
</section>  

