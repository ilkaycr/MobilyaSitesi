
<?php

include('baglan.php');

$i = $_POST["ad"];
$s = $_POST["soyad"];
$e = $_POST["email"];
$t = $_POST["telno"];
$p = $_POST["sifre"];
$pp = $_POST["ssifre"];



$sorgu = mysqli_query($conn,"Select * from musteriler where e_mail='$e'");
$say_uye = mysqli_num_rows($sorgu);

if(strlen($t)!=11){

  echo '<div class="alert alert-danger" role="alert">
        Telefon Numarası başında 0 ile birlikte 11 haneli girilmelidir
      </div>';
} elseif ( $say_uye > 0 ) {
  echo '<div class="alert alert-danger" role="alert">
  Bu üye zaten kayıtlı
  </div>';
}
elseif ( $p != $pp  ) {
  echo '<div class="alert alert-danger" role="alert">
  Şifreler eşleşmiyor
</div>';
}  
else {
   // echo "kayıt ekle tamam";
   $p = md5(sha1(md5($p)));
   $ekle = "INSERT INTO musteriler (ad, soyad, e_mail , tel_no , sifre) VALUES ('$i','$s','$e','$t','$p')";
   $calistirekle = mysqli_query($conn,$ekle);
   echo '<div class="alert alert-success" role="alert">
   Kayıt Başarıyla Gerçekleştirilmiştir
  </div>';

}




?>

<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giriş Paneli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-5">
        <div class="card p-5">
            
            <form method='post' action='kayit.php'>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ad</label>
                <input type="text" class="form-control" required name='ad'>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Soyad</label>
                <input type="text" class="form-control" required name='soyad'>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email addresi</label>
                <input type="email" class="form-control" id="exampleInputEmail1" required name='email'>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefon Numarası</label>
                <input type="int" class="form-control" required name='telno'>
                <?php 
                  if(strlen($t) == 11 ){
                    echo '';
                  }
                  else{
                    echo 'Doğru giriniz lütfen';
                  }
                ?>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Şifre</label>
                <input type="password" class="form-control" id="exampleInputPassword1" required name='sifre'>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Şifreyi Tekrar Giriniz</label>
                <input type="password" class="form-control" id="exampleInputPassword1" required name='ssifre'>
            </div>

            <button type="submit" name="kaydet" class="btn btn-primary">Kaydet</button>

            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item ">
							<a class="nav-link" href="index.php">Ana Sayfaya dön</a>
						</li>

					  </ul>

            </form>
            
        </div>
    </div>
  </body>
</html>
