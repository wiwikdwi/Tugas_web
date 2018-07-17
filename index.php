<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Upload-Download File</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">
    body {
      padding-top: 70px;
      background: #eeeeee;
    }

    .container-body {
      background: #ffffff;
      box-shadow: 1px 1px 1px #999;
      padding: 20px;
    }
  </style>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">WiRaa.Webs</a>
       
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="upload.php">Upload</a></li>
          <li><a href="download.php">Download</a></li>
          <li><a href="about.php">About Websme</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php
          if($_SESSION['user']){
            echo '<li><a href="profile.php">Profile</a></li>';
            echo '<li><a href="logout.php" onclick="return confirm(\'Yakin?\')">Logout</a></li>';
          }else{
            echo '<li><a href="login.php">Login</a></li>';
          }
          ?>
          
        </ul>
      </div>
    </div>
  </nav>

  <div class="container container-body">
    <h1>Selamat datang!</h1>
    <hr>
    <p><h4>Hai para sobat, senang sekali rasanya saya bisa membuat sebuah aplikasi website yang dalam hal ini adalah aplikasi dengan sistem Upload dan Download file.</p> Lanjut saja, saya jelaskan alur bagaimana aplikasi ini berjalan.</p>
    <ol>
      <li>Jika sudah mengakses website ini, kalian tidak bisa melakukan apa-apa, baik itu Upload atau Download, karena hak aksesnya di batasi hanya untuk user yang sudah terdaftar. Nah, jika kalian ingin mencoba web Upload dan Download ini silahkan klik menu <b>Login</b> di atas bagian kanan kemudian klik <b>Register</b> untuk daftar.</li>
      <li>Isi register, dan setelah Register selesai, silahkan Login dengan username dan password yang sudah di daftarkan tadi.</li>
      <li>Setelah berhasil Login, sobat bisa deh mencoba web Upload dan Download File.</li>
      <li>Untuk Upload silahkan klik menu Upload di atas, pilih file yang ingin di upload (bisa dokumen atau gambar, jangan movie/video/mp3), jika sudah pilih file tinggal klik tombol Upload.</li>
      <li>Tunggu proses upload sampai selesai.</li>
      <li>Jika sudah selesai, File sobat akan masuk di database dan bisa di Download di menu Download.</li>
    </ol>
    <p><b>Catatan:</b> Jangan Upload file terlalu besar, untuk mencoba demo ini upload ukuran file yang tidak lebih dari 2MB. Selamat mencoba !!!</p>

    <hr>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>