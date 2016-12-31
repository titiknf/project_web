 <?php

 $act=$_GET[act];
 if ($act=='hapus'){
 $id_kirim = $_GET['id_orders'];
  mysql_query("DELETE FROM orders WHERE id_orders='$id_kirim'"); 
  header('location:index.php?pg=tabelOrder');
 }

 else if ($act='kirim'){
 $id_kirim = $_GET['id_orders'];
 $kirim = "Lunas/Terkirim";
 mysql_query("UPDATE orders SET status_orders='$kirim' where id_orders='$id_kirim'")or die ("gagal");
      header('location:index.php?pg=tabelOrder');
  }



 ?>
