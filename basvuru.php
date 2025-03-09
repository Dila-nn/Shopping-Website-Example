


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Başvuru</title>
    <link rel="stylesheet" href="form.css">

    
</head>
<body>
    <header >
        <h1>" Tasarımların Bizle Daha Değerli "</h1>
    </header>

    <div class="container">
        <form action="form.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Adınız Soyadınız:</label>
                <input type="text" id="name" name="fullname" required>
            </div>
            <div class="form-group">
                <label for="email">E-posta Adresiniz:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Cinsiyetiniz:</label>
                <select id="gender" name="subject" required>
                    <option value="">Seçiniz</option>
                    <option value="male">Erkek</option>
                    <option value="female">Kadın</option>
                    <option value="other">Diğer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="file">CV Yükleyin:</label>
                <input type="file" id="resume" name="attachment"  required>
            </div>
            <button type="submit">Başvur</button>
        </form>
        <a href="index.html" class="return-btn">Anasayfaya Dön</a>
    </div>
</body>
</html>