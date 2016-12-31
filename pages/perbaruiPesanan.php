<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

$currency = 'Rp ';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'pet_city';
    $db_host = 'localhost';
    $mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

if(isset($_SESSION['cart'])) {

  $total = 0;

  foreach($_SESSION['cart'] as $kd_brg => $jumlah) {

    $result = $mysqli->query("SELECT * FROM barang WHERE kd_brg = ".$kd_brg);

    if($result){

      if($obj = $result->fetch_object()) {


        $cost = $obj->harga * $jumlah;

        $user = $_SESSION['s_email'];
        


        $query = $mysqli->query("INSERT INTO orders (barang_kode,nama_brg,deskripsi,harga,unit,total,email) VALUES('$obj->barang_kode','$obj->nama_brg', '$obj->deskripsi', $obj->harga, $jumlah, $cost, '$user')");

        if($query){
          $jumlahBaru = $obj->jumlah - $jumlah;
          if($mysqli->query("UPDATE barang SET jumlah = ".$jumlahBaru." WHERE kd_brg = ".$kd_brg)){

          }
        }

        //send mail script
        /*$query = $mysqli->query("SELECT * from orders order by date desc");
        if($query){
          while ($obj = $query->fetch_object()){
            $subject = "Your Order ID ".$obj->id;
            $message = "<html><body>";
            $message .= '<p><h4>Order ID ->'.$obj->id.'</h4></p>';
            $message .= '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
            $message .= '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
            $message .= '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
            $message .= '<p><strong>Price Per Unit</strong>: '.$obj->price.'</p>';
            $message .= '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
            $message .= '<p><strong>Total Cost</strong>: '.$obj->total.'</p>';
            $message .= "</body></html>";
            $headers = "From: support@techbarrack.com";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            $sent = mail($user, $subject, $message, $headers) ;
            if($sent){
              $message = "";
            }
            else {
              echo 'Failure';
            }
          }
        }*/



      }
    }
  }
}

unset($_SESSION['cart']);
echo "<script>alert('Order terkirim'); document.location='index.php?pg=suksesPesan'</script>;";
?>
