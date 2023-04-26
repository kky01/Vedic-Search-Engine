<?php
   $servername = "localhost"; 
   $username = "root"; 
   $password = ""; 
   $dbname ="google_new"; 

//    to create connection 

   $conn = mysqli_connect($servername,$username,$password,$dbname);  

   if($conn){
   //  echo "connection success"; 
   }else{
   //   die("connection failed".mysqli_connect_error()); 
   }
?>