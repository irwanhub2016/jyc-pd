<?php


 //production

 $host="localhost";
 $user="id8089584_root";
 $password="jyc2018";
 $db ="id8089584_jyc";  

 //db name jyc, root, jyc2018

 $mysql = mysqli_connect($host,$user,$password,$db) or die ('koneksi gagal');

 if(!$mysql)
 {
 	echo "Eror Mba. Cek Koneksi Database !";
 }

?>
