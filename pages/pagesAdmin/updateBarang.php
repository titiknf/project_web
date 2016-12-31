
<br>
<br>
<br>
<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
// if(session_id() == '' || !isset($_SESSION)){session_start();}

$barang_kode = $_POST["barang-kode_barang"];
$nama_brg = $_POST["barang-nama_brg"];
$kategori = $_POST["barang-kategori"];
$deskripsi = $_POST["barang-deskripsi"];
$harga = $_POST["barang-harga"];
$jumlah = $_POST["barang-jumlah"];
$judul_gambar = $_POST["barang-judul_gambar"];
$gambar = $_POST["barang-gambar"];


if($barang_kode!=""){
  $result = $mysqli->query('UPDATE barang SET barang_kode ="'. $barang_kode .'" WHERE kd_brg ='.$_SESSION['b_kd_brg']);
  if($result){
  }
}
if($nama_brg!=""){
  $result = $mysqli->query('UPDATE barang SET nama_brg ="'. $nama_brg .'" WHERE kd_brg ='.$_SESSION['b_kd_brg']);
  if($result){
  }
}
if($kategori!=""){
  $result = $mysqli->query('UPDATE barang SET kategori ="'. $kategori .'" WHERE kd_brg ='.$_SESSION['b_kd_brg']);
  if($result){
  }
}
if($deskripsi!=""){
  $result = $mysqli->query('UPDATE barang SET deskripsi ="'. $deskripsi .'" WHERE kd_brg ='.$_SESSION['b_kd_brg']);
  if($result){
  }
}
if($harga!=""){
  $result = $mysqli->query('UPDATE barang SET harga ="'. $harga .'" WHERE kd_brg ='.$_SESSION['b_kd_brg']);
  if($result){
  }
}
if($jumlah!=""){
  $result = $mysqli->query('UPDATE barang SET jumlah ="'. $jumlah .'" WHERE kd_brg ='.$_SESSION['b_kd_brg']);
  if($result){
  }
}
if($judul_gambar!=""){
  $result = $mysqli->query('UPDATE barang SET judul_gambar ="'. $judul_gambar .'" WHERE kd_brg ='.$_SESSION['b_kd_brg']);
  if($result){
  }
}
if($gambar!=""){
  $result = $mysqli->query('UPDATE barang SET gambar ="'. $gambar .'" WHERE kd_brg ='.$_SESSION['b_kd_brg']);
  if($result){
  }
}
//else {
//  echo 'Wrong Password. Please try again. <a href="account.php">Go Back</a>';
//}

   echo "<script>alert('".$_SESSION['b_barang_kode']."sukses dirubah'); document.location = 'index.php?pg=tabelBarang'</script>;";
?>
