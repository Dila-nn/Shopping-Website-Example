<?php
 $host="localhost";
 $kullanici="root";
 $mesaj="";
 $vt="iletisim";

 $baglanti=mysqli_connect($host,$kullanici,$mesaj,$vt);
 mysqli_set_charset($baglanti,"UTF8");

?>