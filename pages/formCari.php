
<style>
.product_box {
    float: left;
    width: 223px;
    padding: 15px;
    margin-bottom: 30px;
    border: 1px solid #34D1b2;
    text-align: center;
    position: :padding;
    background-color: #fff;
    color: black;
    font-family: "Lato","Arial",Arial,Arial,sans-serif;
}

.button {
    color: #A64D00;
}

.product_box .detail {
    float: right;
}

.cleaner { clear: both; width: 100%; height: 0px; font-size: 0px;  }



</style><br><br><br><br>



            <form name="formcari" method="post" action="index.php?pg=formCari"  class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="search by name" name="input_cari">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form><br>


            <div class="col-lg-19 text-center">
                  
            </div>
            <br>
            <br>
            <br>
                <?php
                    if( isset( $_GET['hal'] ) ) {
                        $jum = ( $_GET['hal'] - 1 ) * 6;
                        $limit = "LIMIT $jum, 6";
                        $otp = $_GET['hal'];
                    }
                    else {
                        $limit = "LIMIT 0, 6";
                        $otp = 1;
                    }
                    $input_cari= $_POST['input_cari']; //get the nama value from form
                    $i=0;
                    $product_id = array();
                    $product_quantity = array();
                    $result = $mysqli->query("SELECT * FROM barang where nama_brg like '%$input_cari%' $limit");
                    if($result === FALSE){
                      die(mysql_error());
                    }

                    if($result){
                        while($obj = $result->fetch_object()){
                            echo '<div class="col-sm-4 portfolio-item"><div class="panel panel-success">';
                            echo '<h4>'.$obj->nama_brg.'</h4>';
                            echo '<div class = "panel panel-success"></div><br>';
                            echo '<form class="form-horizontal container-fluid">';

                                
                                echo '<img src="'.$obj->gambar.'" height="240" width="240"  /><br>';
                                echo '<p>'.$currency.$obj->harga.'</p>';
                                echo '<p><a href="index.php?pg=detail&kd_brg='.$obj->kd_brg.'" class="btn btn-success form-control" />Detail</a></p>';

                                if($obj->jumlah > 0){
                                echo '<p><a href="pages/update-cart.php?action=add&kd_brg='.$obj->kd_brg.'" class="btn btn-success form-control" />Add to cart</a></p>';

                                }
                                else {
                                  echo "<p><span class='btn btn-danger form-control glyphicon glyphicon-exclamation-sign' aria-hidden='true'> Habis</span></p>  ";
                                }
                              $i++;
                            echo '</form>';
                            echo '</div>';
                            echo '</div>';
                        }

                        
                    }
                    else {
                        echo "<h3>no result back to <a href='index.php?pg=kenari'>kenari </a></h1>";
                    }
                    ?>

                
            </div>
        </div>
        
    </section>
    <?php
            $query = mysql_query( "SELECT * FROM barang" );
            $numb = mysql_num_rows( $query );
            $spg = ( ( $numb -( $numb % 6 ) ) / 6 ) + 1;
            echo "<ul class='pagination'>"; 
            for( $i = 1; $i <= $spg; $i++ ) {
                if( $i == $otp ) {
                    echo "<li class='active'><a href='?pg=kenari&hal=$i'>$i</a></li>";
                }
                else {
                    echo "<li><a href='?pg=kenari&hal=$i'>$i</a></li>";
                }
            }
            echo "</ul>";
        ?>


