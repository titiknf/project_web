<?php
if( isset( $_GET['hal'] ) ) {
	$jum = ( $_GET['hal'] - 1 ) * 10;
	$limit = "LIMIT $jum, 10";
	$otp = $_GET['hal'];
}
else {
	$limit = "LIMIT 0, 10";
	$otp = 1;
}
?>
<header class="container">
  <div> <h3><p class="page-header">Cash Report</p></h3></div>
  </header>
  <div class="container-fluid">
  <table class="table table-hover">
<tr>
<th width="77">Kode Cash</th>
<th width="124">KTP</th>
<th width="103">Kode Mobil</th>
<th width="83">Tanggal Cash</th>
<th width="83">Harga</th>
<th width="83">Action</th>


</tr>
<?php
$select = "SELECT * FROM beli_cash order by cash_tgl desc $limit";
$select_query = mysql_query($select);
while($row=mysql_fetch_array($select_query))
	{
	$kode_cash= $row['kode_cash'];
	$ktp= $row['ktp'];
	$kode_mobil= $row['kode_mobil'];
	$cash_tgl= $row['cash_tgl'];
	$cash_bayar= $row['cash_bayar'];
{
?>	
  <tr>
		<td><?php echo"$kode_cash";?></td>
		<td><?php echo"$ktp";?></td>
		<td><?php echo"$kode_mobil";?></td>
		<td><?php echo"$cash_tgl";?></td>
		<td><?php echo"$cash_bayar";?></td>
		<td><a href ="print/cetak_cash.php?kode_cash=<?php echo $kode_cash; ?>"><span class="glyphicon glyphicon-print"></span></a> </td>
	</tr>
<?php
}
}
?>
</table>

<?php
	$query = mysql_query( "SELECT * FROM pembeli" );
	$numb = mysql_num_rows( $query );
	$spg = ( ( $numb -( $numb % 10 ) ) / 10 ) + 1;
	echo "<ul class='pagination'>";	
	for( $i = 1; $i <= $spg; $i++ ) {
		if( $i == $otp ) {
			echo "<li class='active'><a href='?pg=cash_report&hal=$i'>$i</a></li>";
		}
		else {
			echo "<li><a href='?pg=cash_report&hal=$i'>$i</a></li>";
		}
	}
	echo "</ul>";
?>