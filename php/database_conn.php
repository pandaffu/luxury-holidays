<?php
   $dbConn = new mysqli('localhost', 'unn_w20007907', 'password', 'unn_w20007907');

   if ($dbConn->connect_error) {
      echo "<p>Connection failed: ".$dbConn->connect_error."</p>\n";
      exit;
   }
?>
