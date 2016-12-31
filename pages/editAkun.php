<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}

 $currency = 'Rp ';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'pet_city';
    $db_host = 'localhost';
    $mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

?>


<br>
<br>
<br>
    <div class="row" style="margin-top:30px;" align="left">
      <div class="small-12">
        <p><?php echo '<h3>Hi ' .$_SESSION['s_nama'] .'</h3>'; ?></p>

        <p><h4>Account Details</h4></p>

        <p>Below are your details in the database. If you wish to change anything, then just enter new data in text box and click on update.</p>
      </div>
    </div>

    <div class="container-fluid" style = "width:50%">
    <form method="POST" action=index.php?pg=updateAkun style="margin-top:30px;">
      
              <?php

                $result = $mysqli->query('SELECT * FROM member WHERE id_member='.$_SESSION['usid']);

                if($result === FALSE){
                  die(mysql_error());
                }

                if($result) {
                  $obj = $result->fetch_object();
                  echo '<div class="form-group">
                        <input type="text" name="member_nama" class="form-control" placeholder="Nama:  '. $obj->nama. '" maxlength="16"/>
                        </div>';
                  echo '<div class="form-group">
                        <input type="password" name="member_password" class="form-control" placeholder="Password:  '. $obj->password. '" maxlength="16"/>
                        </div>';
                  echo '<div class="form-group">
                        <input type="text" name="member_gender" class="form-control" placeholder="Gender:  '. $obj->gender. '" maxlength="16"/>
                        </div>';
                  echo '<div class="form-group">
                        <input type="text" name="member_email" class="form-control" placeholder="Email:  '. $obj->email. '" maxlength="16"/>
                        </div>';
                  echo '<div class="form-group">
                        <input type="text" name="member_alamat" class="form-control" placeholder="Alamat:  '. $obj->alamat. '" maxlength="16"/>
                        </div>';
                  echo '<div class="form-group">
                        <input type="text" name="member_kodepos" class="form-control" placeholder="Kodepos:  '. $obj->kodepos. '" maxlength="16"/>
                        </div>';
                  echo '<div class="form-group">
                        <input type="text" name="member_kota" class="form-control" placeholder="Kota:  '. $obj->kota. '" maxlength="16"/>
                        </div>';
                  echo '<div class="form-group">
                        <input type="text" name="member_telp" class="form-control" placeholder="Telepon:  '. $obj->telp. '" maxlength="16"/>
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
