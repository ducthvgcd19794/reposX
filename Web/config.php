<?php
$conn_string = "host=ec2-54-91-188-254.compute-1.amazonaws.com"
        . " port=5432 dbname=d6f3b2tho2qipd"
        . " user=ewdctwecvspmxa"
        . " password=5913e93587e182aed6cb40f6c1f799234c21046f8ae4918c713fa9677077ab26";
$db = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>