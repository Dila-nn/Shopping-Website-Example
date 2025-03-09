<?php

include("baglanti.php");

if(isset($_POST["kaydet"]))
{
    $name=$_POST["kullaniciadi"];
    $email=$_POST["email"];
    $mesaj = $_POST['mesaj'];

    $ekle="INSERT INTO veriler (kullanici_adi, email, mesaj ) VALUES ('$name','$email','$mesaj') ";
    $calistirekle = mysqli_query($baglanti,$ekle);

    if($calistirekle){
        echo '<div class="alert alert-success" role="alert">
        kayit başarili şekilde eklendi
      </div>';

    }
    else{
        echo '<div class="alert alert-danger" role="alert">
        kayıt eklenirken bir problem oluştu!!
      </div>';
    }

    mysqli_close($baglanti);
}

$pic="resimler/iangles-1430105_1280.png";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-image:url('<?php echo $pic?>');
            background-size:no-repeat center center/cover;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Görüşleriniz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bildiri.css" type="text/css">
</head>
<body>
    <header  >
        <a href="index.html" class="logo"><img src="resimler/logom_transparent.png" alt=""></a>
        <a href="#" class="menu " onClick="toggleMenu();" ><ion-icon name="grid"></ion-icon></a>
        <ul class="nav">
            <li><a href="kadin.html">KADIN</a></li>
            <li><a href="erkek.html">Erkek</a></li>
            <li><a href="yenikoleksiyon.html">YENİ KOLEKSİYON</a></li>
            <li><a href="kayit.php">İLETİŞİM</a></li>
        <li><a href="basvuru.php">MODAMLA</a></li>
        </ul>
        <ul class="nav-mobile ">
            <li><a href="#">Kadın</a></li>
            <li><a href="#">Erkek</a></li>
            <li><a href="#">Yeni Koleksiyon</a></li>
        </ul>
    </header>
    <div class="container">
      
        <form action="kayit.php"method="POST">
            
            <h1>İLETİŞİM FORMU</h1>
            <input type="text" id="firstName" name="kullaniciadi" placeholder="Adınız Soyadınız" >
            
            <input type="email" id="email" name="email" placeholder="Email" >
         
            <h4>Bildirmek istedikleriniz...</h4>
            <textarea required name="mesaj"></textarea>
            <input type="submit" value="Gönder" id="button" name="kaydet">
        </form>
        
    </div>
    <div id="footer">
        <img src ="resimler/logom_transparent.png">
            <div id="footermetin1">
        
                <p>
                    <br><br> Gizlilik Politikası &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanımlama Bilgileri Politikası&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Üyelik Sözleşmesi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yardım&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gizlilik Tercihlerini Yönetin</p>
    
            </div>
        <div id="footermetin2">
            
            <h3>Modam Takip </h3>
            <br>
            <i class="fa-brands fa-twitter fa-xl" style="color: #bdbdbd;"></i>&nbsp;&nbsp;&nbsp;
            <i class="fa-brands fa-instagram fa-xl" style="color: #bdbdbd;"></i>&nbsp;&nbsp;&nbsp;
            <i class="fa-brands fa-facebook fa-xl" style="color: #bdbdbd;"></i>&nbsp;&nbsp;&nbsp;
            <i class="fa-brands fa-tiktok fa-xl" style="color: #bdbdbd;"></i>
            
        </div>
     <footer>
            <p class="copyright">&copy; 2024 Modam Comics. Tüm hakları saklıdır.</p>
        </footer>
</body>
</html>
  </body>
</html>
