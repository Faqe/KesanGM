<html xmlns="http://www.w3.org/1999/xhtml">

<?php include($_SERVER['DOCUMENT_ROOT']."/template/header.php") ?>
<link rel="stylesheet" href="css/kayit.css">
<?php
  if(isset($_POST['submit'])){
    $tckn = $_POST['tckn'];
    $name = $_POST['adsyd'];
    $dogum_yeri = $_POST['dgm_yer'];
    $dogum_tarihi = $_POST['dgm_tarih'];
    $kan_grubu = $_POST['kan_grubu'];
    $okul = $_POST['okul'];
    $cins = $_POST['gender'];
    $iletişim_telefon = $_POST['comm_phone'];
    $iletişim_adresi = $_POST['comm_address'];
    $email = $_POST['login_mail'];
    $sifre = $_POST['login_pass'];
    $kurs = $_POST['course'];

    $query = 'INSERT INTO '.DBNAME_STUDENTS." VALUES(
      '$tckn','$name','$dogum_yeri','$dogum_tarihi','$kan_grubu','$cins','$okul',
      '$iletişim_telefon','$email','$iletişim_adresi')";
      //'$sifre','$kurs'

    $result = Db_Runquery($query);
    if(!$result) echo "<span class='error'> Kaydınız alınırken bir hata oluştu.</span>";
  }
?>
<!--Login Page (seperate?)-->

<form action="kayit.php" method="POST">
  <h2 class="title">Kişisel Bilgiler</h2 class="title">
  <div class="form-element">
    <span class="labelize">T.C. Kimlik No : </span>
    <input type="text" class="text-input" name="tckn" minlength="11" maxlength="11" required />
    <span class="labelize">Ad Soyad : </span>
    <input type="text" class="text-input" name="adsyd" required />
  </div>
  <div class="form-element">
    <span class="labelize">Doğum Yeri : </span>
    <input type="text" class="text-input" name="dgm_yer" required />
    <span class="labelize">Doğum Tarihi : </span>
    <input type="date" class="date-input" name="dgm_tarih" required />
    <!-- Add Calendar-->
  </div>
  <div class="form-element">
    <span class="labelize">Kan Grubu : </span>
    <input type="text" class="text-input" name="kan_grubu" minlength="2" maxlength="3" required />
    <span class="labelize">Cinsiyet : </span>
    <select name="gender">
      <option>Kadın</option>
      <option>Erkek</option>
    </select>
  </div>
  <hr />
  <h2 class="title">Eğitim Bilgileri</h2>
  <div class="form-element">
    <span class="labelize">Son okunan/okunuyor olan okul : </span>
    <select name="School" class="data-input" name="okul">
      <option>İlköğretim</option>
      <option>Lise</option>
      <option>Üniversite</option>
      <option>Yüksek Lisans</option>
    </select>
  </div>
  <hr />
  <h2 class="title">İletişim Bilgileri</h2>
  <div class="form-element">
    <span class="labelize">Telefon : </span>
    <input type="text" class="text-input" name="comm_phone" minlength="10" maxlength="11" required />
    <span class="labelize">Adres : </span>
    <input type="text" class="text-input" name="comm_address" required />
  </div>
  <hr />
  <h2 class="title">Giriş Bilgileri</h2>
  <div class="form-element">
    <span class="labelize">E-Mail : </span>
    <input type="text" class="text-input" name="login_mail" required />
    <span class="labelize">Şifre : </span>
    <input type="password" class="text-input" name="login_pass" required />
  </div>
  <hr />
  <h2 class="title">Kurs Bilgileri</h2>
  <div class="form-element">
    <span class="labelize">Kurs Adı: </span>
    <select name="course" class="data-input">
      <option>Kürek</option>
    </select>
  </div>
  <input type="submit" value="Gönder" class="btn btn-submit" name="submit" />
</form>
<?php include($_SERVER['DOCUMENT_ROOT']."/template/footer.php") ?>