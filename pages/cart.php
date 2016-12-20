<div class="intro-message">
      <div class="large-12">
        <?php

          echo '<p><h3>Your Shopping Cart</h3></p>';

          if(isset($_SESSION['cart'])) {

            $total = 0;
            echo '<table class="table">';
            echo '<tr>';
            echo '<th>Kode</th>';
            echo '<th>Nama</th>';
            echo '<th>Jumlah</th>';
            echo '<th>Bayar</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $kd_brg => $jumlah) {

            $result = $mysqli->query("SELECT kd_brg,barang_kode,nama_brg,harga,jumlah,diskon FROM barang WHERE kd_brg= ".$kd_brg);


            if($result){

              while($obj = $result->fetch_object()) {
                $bayar = $obj->harga * $jumlah; //work out the line cost
                $total = $total + $bayar; //add to the total cost

                echo '<tr>';
                echo '<td>'.$obj->barang_kode.'</td>';
                echo '<td>'.$obj->nama_brg.'</td>';
                echo '<td>'.$jumlah.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="index.php?pg=Uchart&id='.$kd_brg.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="index.php?pg=URemove&id='.$kd_brg.'">-</a></td>';
                echo '<td>'.$harga.'</td>';
                echo '</tr>';
              }
            }

          }



          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="left"><a href="update-cart.php?action=empty" class="btn btn-default  "> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Empty</a>&nbsp;<a href="index.php?pg=kenari" class="btn btn-info"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Continue Shopping</a>';
          
          if(isset($_SESSION['login'])) {
            echo '<a href="orders-update.php"><button class="btn btn-default" style="float:right;"><span class="class="btn btn-info"" aria-hidden="true"></span>COD</button></a>';
          }

          else {
            echo '<a href="login.php"><button style="float:left;">Login</button></a>';
          }

          echo '</td>';

          echo '</tr>';
          echo '</table>';
        }

        else {
          echo "You have no items in your shopping cart.";
        }





          echo '</div>';
          echo '</div>';
          ?>
