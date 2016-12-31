<br/>
<br />

<style>
.tabelMember{
  color: A64D00;
}



</style>
<?php
$tampil=mysql_query("select * from orders");
$no=1;
?>
<br>
<br>
<br>
</center><center>
  <table class="table table">
    <tr>
    <td width="35">#</td>
    <td width="70">email</td>
    <td width="88">tanggal</td>
    <td width="92">Kode barang</td>
    <td width="130">Nama Barang</td>
    <td width="60">Jumlah</td>
    <td width="108">status</td>
    <td width="120">action</td>
  </tr>
  <?php
  while ($hasil=mysql_fetch_array($tampil)){?>
  <tr>
    <td><?php print"$no"?></td>
    <td><?php print"$hasil[email]"?></td>
    <td><?php print"$hasil[date]"?></td>
    <td><?php print"$hasil[barang_kode]"?></td>
    <td><?php print"$hasil[nama_brg]"?></td>
    <td><?php print"$hasil[unit]"?></td>
    <td><?php print"$hasil[status_orders]"?></td>
    <td><a href="index.php?pg=kirimOrder&act=hapus&id_orders=<?php echo $hasil['id_orders']; ?>" class="btn btn-primary btn-xs btn-danger">Hapus</a>
        <a href="index.php?pg=kirimOrder&act=edit&id_orders=<?php echo $hasil['id_orders']; ?>" class="btn btn-primary btn-xs btn-success"><span class=" glyphicon glyphicon-file" aria-hidden="true"></span>Kirim</a>

    </td>
    <?php $no++ ?>
  </tr>
  <?php } ?>
</table></center>