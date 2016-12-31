<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
$currency = 'Rp ';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'pet_city';
    $db_host = 'localhost';
    $mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
$kd_brg = $_GET['kd_brg'];
$action = $_GET['action'];
if($action === 'empty')
  unset($_SESSION['cart']);
$result = $mysqli->query("SELECT jumlah FROM barang WHERE kd_brg = ".$kd_brg);
if($result){
  if($obj = $result->fetch_object()) {
    switch($action) {
      case "add":
      if($_SESSION['cart'][$kd_brg]+1 <= $obj->jumlah)
        $_SESSION['cart'][$kd_brg]++;
      break;
      case "remove":
      $_SESSION['cart'][$kd_brg]--;
      if($_SESSION['cart'][$kd_brg] == 0)
        unset($_SESSION['cart'][$kd_brg]);
        break;
    }
  }
}
header("location:../index.php?pg=cart");
?>