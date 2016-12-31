<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

$nama = $_POST["member_nama"];
$level = $_POST["member_level"];
$password = $_POST["member_password"];
$gender = $_POST["member_gender"];
$email = $_POST["member_email"];
$alamat = $_POST["member_alamat"];
$kodepos = $_POST["member_kodepos"];
$kota = $_POST["member_kota"];
$telepon = $_POST["member_telp"];


if($nama!=""){
  $result = $mysqli->query('UPDATE member SET nama ="'. $nama .'" WHERE id_member ='.$_SESSION['usid']);
  if($result){
  }
}
if($level!=""){
  $result = $mysqli->query('UPDATE member SET level ="'. $level .'" WHERE id_member ='.$_SESSION['usid']);
  if($result){
  }
}
if($password!=""){
  $result = $mysqli->query('UPDATE member SET password ="'. $password .'" WHERE id_member ='.$_SESSION['usid']);
  if($result){
  }
}
if($gender!=""){
  $result = $mysqli->query('UPDATE member SET gender ="'. $gender .'" WHERE id_member ='.$_SESSION['usid']);
  if($result){
  }
}
if($email!=""){
  $result = $mysqli->query('UPDATE member SET email ="'. $email .'" WHERE id_member ='.$_SESSION['usid']);
  if($result){
  }
}
if($alamat!=""){
  $result = $mysqli->query('UPDATE member SET alamat ="'. $alamat .'" WHERE id_member ='.$_SESSION['usid']);
  if($result){
  }
}
if($kodepos!=""){
  $result = $mysqli->query('UPDATE member SET kodepos ="'. $kodepos .'" WHERE id_member ='.$_SESSION['usid']);
  if($result){
  }
}
if($kota!=""){
  $result = $mysqli->query('UPDATE member SET kota ="'. $kota .'" WHERE id_member ='.$_SESSION['usid']);
  if($result){
  }
}
if($telepon!=""){
  $result = $mysqli->query('UPDATE member SET telepon ="'. $telepon .'" WHERE id_member ='.$_SESSION['usid']);
  if($result){
  }
}
//else {
//  echo 'Wrong Password. Please try again. <a href="account.php">Go Back</a>';
//}


   if( $_SESSION['level'] == "user") { 
   echo "<script>alert('sukses dirubah'); document.location = 'index.php?pg=editAkun'</script>;";
   }  
   else if( $_SESSION['level'] == "admin") {
   echo "<script>alert('sukses dirubah oleh admin'); document.location = 'index.php?pg=tabelMember'</script>;";
   }
?>
