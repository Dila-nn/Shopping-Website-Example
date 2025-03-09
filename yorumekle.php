<?php

$host = "localhost";
$user = "root"; 
$pass = "";     
$db   = "yorum_sistemi";

$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Formdan gelen verileri al
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isim = $_POST['isim'];
    $yorum = $_POST['yorum'];
    $puan = $_POST['puan'];

    // SQL sorgusu ile veriyi ekle
    $sql = "INSERT INTO yorumlar (isim, yorum, puan) VALUES ('$isim', '$yorum', '$puan')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Yorum başarıyla eklendi!";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
