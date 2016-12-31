<html>
<body>
<?php
	class format {
        function uang( $uang ) {            
            $angka = $uang;
            $hasil = "";
            $panjang = strlen( $angka );
            while( $panjang > 3 ) {
                $hasil = "." . substr( $angka, -3 ) . $hasil;
                $sisa = strlen( $angka ) - 3;
                $angka = substr( $angka, 0, $sisa );
                $panjang = strlen( $angka );
            }
            $hasil = "Rp. " . $angka . $hasil . ",00"; 
            return $hasil;
        }
    }
    $format = new format();
    if( !isset( $_SESSION['login'] ) ) {
        $_SESSION['login'] = false;
    }
    if( !isset( $_GET['pg'] ) ) {
        $page = "home";
    }
    else {
        $page = $_GET['pg'];
    }
	?>
<style type="text/css">
body{
	font-family:"Courier New", Courier, monospace;
}
table{
	font-size:12px;
}
.tr{
	border : 1px solid black;
	border-spacing : 1px;
	font-size:14px;
}
</style>

</head>
<body onLoad="window.print() ">
<?php
mysql_connect( "localhost", "root", "" );
    mysql_select_db( "dealer_mobil" ) or die ( "<script>alert('Database tidak di temukan');</script>" );
	$getkode_cash=$_GET["kode_cash"];	
	$Tampil="SELECT * FROM beli_cash where kode_cash='$getkode_cash'";
	$qryTampil=mysql_query ($Tampil);
	$dataTampil=mysql_fetch_array ($qryTampil);
	$tglbayar			= date("Y-m-d");
?>
<center>
  <h1>&raquo; PT VENT CAR &laquo;</h1>
  <h2> Rincian Pembelian Mobil Secara Tunai!</h2>
  <h5> Addres : Jl. Ikan Layur IV No. 23 Malang Jawa Timur Indonesia</h5>
  <h5> Phone  : 085604705521 Kode Pos 65143 - Fax : 3344558 Email : anggi@gmail.com </h5>


</center>

<form method="POST" action="">
<table border="0" align="center" width="70%" style="border : 1px solid black;border-spacing : 1px;">
  <tr>
    <th height="23" align="right">TANGGAL</th>
    <th>:</th>
    <td><?php echo $tglbayar ?></td>
  </tr>
  <tr>
    <th height="23" align="right">KODE CASH</th>
    <th>:</th>
    <td><?php echo $dataTampil['kode_cash']; ?></td>
    <th align="right">NOMER KTP</th>
    <th>:</th>
    <td><?php echo $dataTampil['ktp']; ?></th>
  </tr>
  <tr>
    <th align="right">KODE MOBIL</th>
    <th>:</th>
    <td><?php echo $dataTampil['kode_mobil']; ?></td>
    <th align="right">CASH TANGGAL</th>
    <th>:</th>
    <td><?php echo $dataTampil['cash_tgl']?></td>
  </tr>
  <tr>
    <th align="right">HARGA</th>
    <th>:</th>
    <td><?php echo $dataTampil['cash_bayar']; ?></td>
    
</table>
<!-------------------------------------------------------------------------------------------->
<br>
<table align="center" width="50%">
    <tr>
    	<td colspan="3">- BPKB asli, faktur telah diterima dengan baik dan lengkap<br>
- Tanda terima sementara tidak berlaku lagi dengan pembayaran kendaraan ini<br>
- Pembayaran dengan Cek / Giro / KU diaggap sah setelah dapat dicairkan / clearing</u></td>
    </tr>
    <tr>
		<td colspan=6 align='right'>Pembeli,<br>
		  <br><br></td>
	</tr>
    <tr>
		<td colspan=6 align='right'><?php echo $dataTampil['ktp']?></td>
	</tr>
	</table>
	<br>
	<br>
<table border="0" align="center" width="70%" style="border : 1px solid black;border-spacing : 1px;">
<center><h5> Pembayaran dapat ditransfer ke BRI AC 021-4477854 an PT Vent Car  </h5></center>
</table>
</form>

<? }?>
Go <a href="../admin.php?pg=cash_report">Back</a>
</body>
</html>