<style type="text/css">
  body{background:#efefef;font-family:arial;}
  #wrapshopcart{width:70%;margin:3em auto;padding:30px;background:#fff;box-shadow:0 0 15px #ddd;}
  h1{margin:0;padding:0;font-size:2.5em;font-weight:bold;}
  p{font-size:1em;margin:0;}
  table{margin:2em 0 0 0; border:1px solid #eee;width:100%; border-collapse: separate;border-spacing:0;}
  table th{background:#fafafa; border:none; padding:20px ; font-weight:normal;text-align:left;}
  table td{background:#fff; border:none; padding:12px  20px; font-weight:normal;text-align:left; border-top:1px solid #eee;}
  table tr.total td{font-size:1.0em;}
  .btnsubmit{display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:2em 0;}
  form{margin:2em 0 0 0;}
  label{display:inline-block;width:auto;}
  input[type=text]{border:1px solid #bbb;padding:10px;width:30em;}
  textarea{border:1px solid #bbb;padding:10px;width:30em;height:5em;vertical-align:text-top;margin:0.3em 0 0 0;}
  .submitbtn{font-size:1.5em;display:inline-block;padding:10px;border:1px solid #ddd;background:#eee;color:#000;text-decoration:none;margin:0.5em 0 0 8em;};
   
  </style>
<body onLoad="window.print() ">
<?php
 $total = NULL;
 $post = $_POST;
  
 /* untuk invoice bisa di ambil dari database, karena pada dasarnya invoice tidak akan pernah recordnya itu di delete  */
 /* berapa jumlah invoice kemudian di tambahkan 1 */
 $numrows_invoice_db = 313;
 $invoice = $numrows_invoice_db + 1;
 $tglbayar     = date("Y-m-d");
?>
 

<!DOCTYPE html>
 <head>
 </head>
 <body>
  <div id="wrapshopcart">
   <h1>Invoice Ken City <?php echo $_SESSION['usid'];?></h1>
   <label>Tanggal :<?php echo $tglbayar ?></label>
   <p>Silahkan save halaman ini ... </p>
   <div align="left">
   <h3>Data Anda </h3>

   <label>nama    : <?php echo  $_SESSION['s_nama'] ;?></label><br>
   <label>Telepon : <?php echo $_SESSION['s_telpon'] ;?></label><br>
   <label>Email   : <?php echo $_SESSION['s_email'] ;?></label><br>

  </div>

   <h3 align="left">Produk Yang Anda Beli : </h3>
   <?php 
   echo '<table>';
   echo '<tr><th width="40%">Barang</th><th width="10%">Qty</th><th width="20%">Harga</th><th width="30%">Total</th></tr>';
   $user = $_SESSION["s_email"];
          $result = $mysqli->query("SELECT * from orders where email='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {
              $bayar = $obj->harga * $obj->unit    ; //work out the line cost
              $total = $total + $bayar; //add to the total cost


              echo'<tr>
                  <td>'.$obj->nama_brg.'</td>
                  <td>'.$obj->unit.'</td>
                  <td>'.$obj->harga.'</td>
                  <td>'.$obj->total.'</td>
              </tr>';
               echo '<tr class="total" align="right"><td></td><td ><td>=</td></td><td>'.$total.'</td></tr>';
            }
          } 
  echo '</table>';?>   
    
   <h3>invoice harap disimpan</h3>
   <p>Pembayaran dapat ditransfer ke rekening BNI 021-890234765 a.n ken city</p>
    
    
  </div>
 <a href="index.php?pg=kenari">Klik untuk kembali</a>
 </body>
</html>