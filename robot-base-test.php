<?php

   ini_set('display_errors', 1); // Let me learn from my mistakes.
   error_reporting(E_ALL & ~ E_NOTICE); // Don't show notices.

   //connect to databse
	 $dbc = new mysqli('localhost', 'root', 'mM123', 'robotarm');//robotarm.engines
   /*if ($dbc->connect_error) {
     echo "database connection error";
   }
   else {
     echo "database connection success<br>";
   }*/

   $sql = "SELECT direction FROM engines ORDER BY id DESC LIMIT 1;";
   $result = $dbc->query($sql);

   if ($result->num_rows > 0) { // output data of each row
     while($row = $result->fetch_assoc()) {
       echo $row["direction"] ."<br>";
     }
   } else {
     echo "0 results";
   }

   $dbc->close();
   ?>
