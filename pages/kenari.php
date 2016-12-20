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




            <div class="col-lg-19 text-center">
                    <h2>Kenari</h2>
                </div>
            
            
                <?php
                    if( isset( $_GET['hal'] ) ) {
                        $jum = ( $_GET['hal'] - 1 ) * 5;
                        $limit = "LIMIT $jum, 5";
                        $otp = $_GET['hal'];
                    }
                    else {
                        $limit = "LIMIT 0, 5";
                        $otp = 1;
                    }
                    $i=0;
                    $product_id = array();
                    $product_quantity = array();
                    $result = $mysqli->query("SELECT * FROM barang $limit");
                    if($result === FALSE){
                      die(mysql_error());
                    }

                    if($result){
                        while($obj = $result->fetch_object()){
                            echo '<div class="col-sm-4 portfolio-item">';
                            echo '<div class = "panel panel-default">';
                            echo '<form class="form-horizontal container-fluid">';

                                echo '<h4>'.$obj->nama_brg.'</h4>';
                                echo '<img src="'.$obj->gambar.'" height="240" width="240"  />';
                                echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->harga.'</p>';
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
                    ?>

                
            </div>
        </div>
        
    </section>
    <?php
            $query = mysql_query( "SELECT * FROM barang" );
            $numb = mysql_num_rows( $query );
            $spg = ( ( $numb -( $numb % 5 ) ) / 5 ) + 1;
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


   