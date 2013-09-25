<?php
  session_start();
  session_destroy();
  echo "<center>Anda telah sukses Logout
  <meta http-equiv=\"REFRESH\" content=\"3;url=index.php?pesan=anda%20telah%20keluar%20dari%20sistem\">
  "

?>
