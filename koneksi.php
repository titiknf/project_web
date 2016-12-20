<?php
	session_start();
    mysql_connect( "localhost", "root", "" );
    mysql_select_db( "pet_city" ) or die ( "<script>alert('Database tidak di temukan');</script>" );

    $currency = 'Rp ';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'pet_city';
    $db_host = 'localhost';
    $mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
	
?>