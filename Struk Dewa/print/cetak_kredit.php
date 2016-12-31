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
	$getkode_paket=$_GET["kode_paket"];	
	$Tampil="SELECT * FROM paket_kredit where kode_paket='$getkode_paket'";
	$qryTampil=mysql_query ($Tampil);
	$dataTampil=mysql_fetch_array ($qryTampil);
	$tglbayar			= date("Y-m-d");
?>
<center>
  <h1>&raquo; PT VENT CAR &laquo;</h1>
  <h2> Rincian Pembelian Mobil Secara Kredit!</h2>
  <h5> Addres : Jl. Ikan Layur IV No. 23 Malang Jawa Timur Indonesia</h5>
  <h5> Phone  : 085604705521 Kode Pos 65234 - Fax : 9876453 Email : admin@gmail.com </h5>


</center>

<form method="POST" action="">
<table border="0" align="center" width="70%" style="border : 1px solid black;border-spacing : 1px;">
  <tr>
    <th height="23" align="right">TANGGAL</th>
    <th>:</th>
    <td><?php echo $tglbayar ?></td>
  </tr>
  <tr>
    <th height="23" align="right">KODE CREDIT</th>
    <th>:</th>
    <td><?php echo $dataTampil['kode_paket']; ?></td>
    <th align="right">NOMER KTP</th>
    <th>:</th>
    <td><?php echo $dataTampil['ktp']; ?></th>
  </tr>
  <tr>
    <th align="right">UANG MUKA</th>
    <th>:</th>
    <td><?php echo $format -> uang($dataTampil['uang_muka']); ?></td>
    <th align="right">CREDIT TANGGAL</th>
    <th>:</th>
    <td><?php echo $dataTampil['credit_tgl']?></td>
  </tr>
  <tr>
    <th align="right">HARGA / bulan</th>
    <th>:</th>
    <td><?php echo  $format -> uang($dataTampil['nilai_cicilan']); ?></td>
  <th align="right">PAKET CICILAN</th>
    <th>:</th>
    <td><?php echo $dataTampil['paket_jumlah_cicilan']?>x</td>
  
  </tr>
    
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
    </table>
	<br>
	<br>
<table border="0" align="center" width="70%" style="border : 1px solid black;border-spacing : 1px;">
<center><h5> Pembayaran dapat ditransfer ke BNI AC 021-9474743 an PT VENT CAR </h5></center>
</table>
</form>
<? }?>
Go <a href="../admin.php?pg=kredit_report">Back</a>
</body>
</html>