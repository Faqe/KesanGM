<?php include('template/header.php'); ?>
<?php
if (isset($_POST['submit'])) {
  $isim = $_POST['isim'];
  $mesaj = $_POST['content'];
  $query = 'INSERT INTO' . DBNAME_MESAJ . "VALUES('$isim','$mesaj')";
  $result = Db_Runquery($query);
  if ($result) echo "Bilgi gönderildi";
  else die("bir sorun oluştu.");
}
?>
<form action="contact.php" method="POST">
  <div class="form-element">
    <span class="labelize">İsim:</span>
    <input type="text" name="isim" class="text-input" required>
  </div>
  <div class="form-element">
    <span class="labelize">Mesajınız:</span>
    <input type="text" name="content" class="text-input longtext" required>
  </div>
  <input type="submit" value="Gönder" name='submit'>
</form>
<?php include('template/footer.php') ?>