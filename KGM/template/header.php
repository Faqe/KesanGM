<html>

<head>
  <link rel="stylesheet" href="/template/css/header.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Keşan Gençlik Merkezi Kayıt Formu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="author" content="Kesan Genclik Merkezi">


  <?php
  //Database stuff
  define("DBNAME_MESAJ", "Mesaj");
  define("DBNAME_STUDENTS", "Ogrenci");
  define("DBNAME_COURSES", "Kurs");
  define("DBNAME_EVENTS", "Etkinlik");
  function base_url($uri = '')
  {
    return $_SERVER['DOCUMENT_ROOT'] . $uri;
  }
  //etc.
  function Db_Runquery($query)
  {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Main";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query($query);
    $conn->close();
    return $result;
  }
  ?>
</head>

<body>
  <ul class="topnav">
    <li>
      <a href="/">
        <img src="/template/res/panellogo.png" alt="" class="logo" />
      </a>
    </li>
    <li>
      <a href="/kurslarimiz.php" class="menuitem">Kurslar</a>
    </li>
    <li>
      <a href="/egitmenlerimiz.php" class="menuitem">Eğitmenler</a>
    </li>
    <li>
      <a href="/etkinliklerimiz.php" class="menuitem">Etkinlikler</a>
    </li>
    <li>
      <a href="/iletisim.php" class="menuitem">İletişim</a>
    </li>
    <li class="nav-right">
      <a href="/auth/kayit.php" class="buttonize signin menuitem">Kayıt ol</a>
    </li>
    <li  class="nav-right">
      <a href="/auth/login.php" class="buttonize login menuitem">Giriş yap</a>
    </li>
  </ul>
