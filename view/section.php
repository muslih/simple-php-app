<section>
    <!-- <h1>Welcome to PNBP Unlam</h1> -->
    <div class="bungkus">
    	<?php 
    	include 'config/koneksi.php';
    	if ($_GET['hal']=='' || $_GET['hal']== '') {
	    	include 'view/content/awal.php';
	    }elseif ($_GET['hal']=='rkakl') {
	    	include 'view/content/hal-rkakl.php';
	    }elseif ($_GET['hal']=='pnbp') {
	    	include 'view/content/hal-pnbp.php';
	    }elseif ($_GET['hal']=='bku'){
	    	include 'view/content/hal-bku.php';
	    }elseif ($_GET['hal']=='bku/up') {
	    	include 'view/content/up.php';
	    }elseif ($_GET['hal']=='bku/ls'){
	    	include 'view/content/ls.php';
	    }elseif ($_GET['hal']=='detail'){
	    	include 'view/content/detail-berita.php';
	    }else{
	    	include 'view/content/awal.php';
	    }
	    ?>
    </div>
    
</section>