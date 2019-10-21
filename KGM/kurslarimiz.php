<?php include("template/header.php"); ?>
<h2 class="title">Mevcut Kurslarımız </h2>
<hr />
<ul>
  <?php
  $query = 'SELECT Adi,Uye_Adedi,Aciklama FROM' . DBNAME_COURSES;
  $result = Db_Runquery($query);
  while ($course = $result->fetch_assoc()) {
    $Ad = $course['Adi'];
    $Uyeler = $course['Uye_Adedi'];
    $Aciklama = $course['Aciklama'];
    echo "<li class=\"item\">
    <h3 class=\"title\">$Ad</h3>
    <span class=\"description\">$Aciklama</span>
    Mevcut üye sayısı:
    <span class=\"count\">$Uyeler</span>
    <a href='/auth/kayit.php' value='Kayıt Yap'></a>";
  }
  ?>
</ul>
<?php include("template/footer.php"); ?>