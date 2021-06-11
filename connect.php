<?php
 $host = 'localhost';
 $username = 'root';
 $pass = '';
 $db = 'foodorder';
 $conn = mysqli_connect($host,$username,$pass);
 if($conn)
 {
   if(!mysqli_select_db($conn,$db))
   {
     echo 'Not selected!!';
   }
 }
else
{
  echo 'Not connected!!';
}
?>