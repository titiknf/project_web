<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
 $currency = 'Rp ';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'pet_city';
    $db_host = 'localhost';
    $mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

$numb_invoice = 100;
$invoice = $numb_invoice + 1;
$total = 0;

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
.invoice {
	font-family: Georgia, Times New Roman, Times, serif;
}
.rekening {
	font-family: Tahoma, Geneva, sans-serif;
}
.rekenin {
	font-family: Arial, Helvetica, sans-serif;
}
</style>

</head>
<!-- <body onLoad="window.print() "> -->
<h5>
<?php
	$getid_orders=$_GET['id_orders'];	
	$Tampil="SELECT * FROM orders where id_orders='$getid_oreders'";
	$qryTampil=mysql_query ($Tampil);
	$dataTampil=mysql_fetch_array ($qryTampil);
	$tglbayar			= date("Y-m-d");
?> 

     
</h5>

 <h1 align="center"><span class="invoice"><samp>Invoice</samp></span></h1>
<center>
  <table border="0" align="center" width="69%" style="border : 1px solid black;border-spacing : 1px;">
    <tr>
    <tr>
      
    <tr>  
  </table>
</center>
<table width="64%" height="365" border="0" align="center" style="border : 1px solid black;border-spacing : 1px;">
  <tr>
    <td colspan="5"><h1 align="center">-- Ken City --</h1>
      <h3 align="center"> Jl.MT.Haryono No.637 </h3>
    <h4 align="center">Malang Telp.(0341)753690</h4>
    <p align="center">---------------------------------------------------------------------------------------------------------------------------</p></td>
  </tr>
  <tr>
    <td width="20%"><div align="right">NOMOR</div></td>
    <td width="33%">&nbsp; </td>
    <td width="21%"><div align="right">TANGGAL</div></td>
    <td width="13%">&nbsp;</td>
    <td width="13%">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right">EMAIL</div></td>
    <td>&nbsp;</td>
    <td><div align="right">NAMA</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">KODE BARANG</div></td>
    <td><div align="center">NAMA PRODUK</div></td>
    <td><div align="center">HARGA</div></td>
    <td><div align="center">JUMLAH</div></td>
    <td><div align="center">TOTAL</div></td>
  </tr>
  <tr>
    <td><?php echo $row['barang_kode'];?></td>
    <td><?php echo $row['nama_brg'];?></td>
    <td><?php echo $row['harga'];?></td>
    <td><?php echo $row['jumlah'];?></td>
    <td><?php echo $jumlah; ?>;</td>
  </tr>
  <tr>
    <td colspan="4"><div align="right">TOTAL BAYAR :</div></td>
    <td><?php echo $total;?></td>
  </tr>
  <tr>
    <td colspan="5"><p> ---------------------------------------------------------------------------------------------------------------------------</p>
      <ol>
      <li>invoice harap disimpan sebagai bukti pemesanan</li>
      <li>barang tidak dapat diambil tanpa tanda bukti</li>
    </ol>
    <p align="center" class="rekenin"><strong>Pembayaran dapat ditransfer ke rekening BNI 021-890234765 a.n ken city</strong></p></td>
  </tr>
</table>
<p>&nbsp;</p>
 
<p><?php echo "<a href='index.php?pg=kenari'> 
Kembali</a>"?></p>

</body>
</html>