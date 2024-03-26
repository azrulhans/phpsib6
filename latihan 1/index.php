<?php
$nama = "Muhammad Azrul Mustafa";
$a = 10;
$b = 10;
$umur = $a + $b;
$email = "azrulcompany123@gmail.com";
$nomor = "08123456789";
$alamat = "Jl.Bukit Datuk Lama,Kota Dumai,Riau,Indonesia";
$pendidikan = "Sarjana Informatika";
$kampus = "Universitas Dumai";
$status = "Mahasiswa";
$skill = "PHP, HTML, CSS, JavaScript,MySQL";
$tentang = "Saya seorang web developer
dengan pengalaman lebih dari 2 tahun. Saya menyukai tantangan dalam
memecahkan masalah dan senang belajar hal-hal baru dalam dunia
teknologi.";
$judul = "Profil Diri";
$hobby = 90;
$ket;
if ($hobby > 80) {
  $ket = "Badminton";
} else {
  $ket = "Berenang";
}
?>


<!DOCTYPE html>
<html>

<head>
  <title>PORTOFOLIO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container">
    <h1>Profil Diri</h1>
    <img src="azrul.jpg" alt="Gambar Profil" class="profile-img" />
    <div class="profile-info">
      <p><span class="label">Nama: <?= $nama ?></span></p>
      <p><span class="label">Umur: <?= $umur ?></span></p>
      <p><span class="label">Hobi: <?= $ket ?></span></p>
      <p><span class="label">Email: <?= $email ?></span></p>
      <p><span class="label">Nomor Telepon: <?= $nomor ?> </span></p>
      <p>
        <span class="label">Alamat: <?= $alamat ?></span>
      </p>
      <p>
        <span class="label">Pendidikan: <?= $pendidikan  ?></span>
      </p>
      <p><span class="label">Status: <?= $status ?></span></p>
      <p><span class="label">Kampus: <?= $kampus ?></span></p>
      <p>
        <span class="label">Kemampuan saya: <?= $skill ?></span>
      </p>
      <span class="label">Tentang saya: <?= $tentang ?></span>
      </p>

    </div>
  </div>
</body>

</html>