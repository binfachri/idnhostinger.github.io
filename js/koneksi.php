<?php 
   // file untuk connect ke database
   
   $username = "root";
   $password = "";
   $server = "localhost";
   $database = "db_appsiswa";

  

   $koneksi = new mysqli($server, $username, $password, database);

   if ($koneksi->connect_error) {
   	die('Kita tidak konek ke server karena:'. $koneksi->error);
   }
     


?>