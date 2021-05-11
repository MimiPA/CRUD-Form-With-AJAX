<?php
// buka koneksi ke database server
// sesuaikan dengan database sendiri
$hostname="localhost"; // sesuaikan
$username="root"; // sesuaikan
$password=""; //sesuaikan
$database="dosen";

if (!$conn=mysqli_connect($hostname,$username,$password))
{
   echo mysqli_error();
   exit;
} else {
   // select default database
   mysqli_select_db($conn, $database);
}
?>
