<?php
          $user = $_SESSION["s_email"];
          $result = $mysqli->query("SELECT * from orders where email='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<p><h4>Order ID ->'.$obj->id_orders.'</h4></p>';
              echo '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
              echo '<p><strong>Product Code</strong>: '.$obj->barang_kode.'</p>';
              echo '<p><strong>Product Name</strong>: '.$obj->nama_brg.'</p>';
              echo '<p><strong>Price Per Unit</strong>: '.$obj->harga.'</p>';
              echo '<p><strong>Units Bought</strong>: '.$obj->unit.'</p>';
              echo '<p><strong>Total Cost</strong>: '.$currency.$obj->total.'</p>';
              echo '<p><hr></p>';

            }
          }
        ?>