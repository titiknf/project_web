<table width="739" class="table">
  <tr>
    <td>Order ID</td>
    <td>Kode Product</td>
    <td>Nama Produk</td>
    <td>Harga per Item</td>
    <td>Jumlah Beli</td>
    <td>Total</td>
  </tr>
<?php
          $user = $_SESSION["s_email"];
          $result = $mysqli->query("SELECT * from orders where email='".$user."'");
              

          if($result) {
            while($obj = $result->fetch_object()) {
              //echo '<div class="large-6">';
              echo '<tr><td>'.$obj->id_orders.'</td>';
              echo '<td>'.$obj->date.'</td>';
              echo '<p><strong>Product Code</strong>: '.$obj->barang_kode.'</p>';
              echo '<p><strong>Product Name</strong>: '.$obj->nama_brg.'</p>';
              echo '<p><strong>Price Per Unit</strong>: '.$obj->harga.'</p>';
              echo '<p><strong>Units Bought</strong>: '.$obj->unit.'</p>';
              echo '<p><strong>Total Cost</strong>: '.$currency.$obj->total.'</p>';
              //echo '</div>';
              //echo '<div class="large-6">';
              //echo '<img src="images/products/sports_band.jpg">';
              //echo '</div>';
              echo '<p><hr></p>';

            }
          }
        ?>

</table>