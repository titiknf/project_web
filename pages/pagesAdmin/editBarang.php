<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

 $currency = 'Rp ';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'pet_city';
    $db_host = 'localhost';
    $mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

$kd_brg=$_GET['kd_brg'];
$query = mysql_query("SELECT kd_brg,barang_kode,nama_brg,jumlah FROM barang WHERE kd_brg='$kd_brg'");
$data  = mysql_fetch_array($query);

$_SESSION['b_kd_brg']  = $data['kd_brg'];
$_SESSION['b_nama_brg']= $data['nama_brg'];
$_SESSION['b_barang_kode']= $data['barang_kode'];
$_SESSION['b_jumlah'] = $data['jumlah'];
?>



<br>
<br>
<br>
    <div class="row" style="margin-top:30px;" align="left">
      <div class="small-12">
        <p><?php echo '<h3>Edit ' .$data['nama_brg'] .'</h3>'; ?></p>

        <p>if you wish to change your data, just enter new data in text box and click on update.</p>
      </div>
    </div>

    <div class="container-fluid" style = "width:50%">
    <form method="POST" action=index.php?pg=updateBarang style="margin-top:30px;">
      
              <?php

                $result = $mysqli->query('SELECT * FROM barang WHERE kd_brg='.$_SESSION['b_kd_brg']);

                if($result === FALSE){
                  die(mysql_error());
                }

                if($result) {
                  $obj = $result->fetch_object();
                  echo '<div class="form-group">
                        <input type="text" name="barang-kode_barang" class="form-control" placeholder="Kode Barang :  '. $obj->barang_kode. '" maxlength="16"/>
                        </div>';
                  echo '<div class="form-group">
                        <input type="text" name="barang-nama_brg" class="form-control" placeholder="Nama Barang :  '. $obj->nama_brg. '" maxlength="16"/>
                        </div>';
                  echo '<div class="form-group">
                        <input type="text" name="barang-kategori" class="form-control" placeholder="Umur :  '. $obj->kategori. '" maxlength="255"/>
                        </div>';
                  echo '<div class="form-group">
                        <input type="text" name="barang-deskripsi" class="form-control" placeholder="Deskripsi :  '. $obj->deskripsi. '" maxlength="16"/>
                        </div>';
                  echo '<div class="form-group">
                        <input type="text" name="barang-harga" class="form-control" placeholder="Harga :  '. $obj->harga. '" maxlength="16"/>
                        </div>';
                  echo '<div class="form-group">
                        <input type="text" name="barang-jumlah" class="form-control" placeholder="Jumlah :  '. $obj->jumlah. '" maxlength="16"/>
                        </div>';
                  echo '<div class="form-group">
                        <input type="text" name="barang-judul_gambar" class="form-control" placeholder="Judul Gambar :  '. $obj->judul_gambar. '" maxlength="16"/>
                        </div>';
                  echo '<div class="form-group">
                        <input type="file" name="barang-gambar" class="form-control" placeholder="Gambar :  '. $obj->gambar. ' maxlength="255" style="padding-bottom:10%;"/>
                        </div>';



                }
          ?>

          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="Update" style="background: #5Ed1BA; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: #00A383; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
      </div>
    </form>
    </div>
