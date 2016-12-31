
<br/>
<br/>
<br/>
<?php
$tampil=mysql_query("select * from barang");
?>


<br>
<br><center>
  <table width="739" class="table">
    <tr class="block">
    <td width="67">Kode</td>
    <td width="112">Nama barang</td>
    <td width="49">kategori</td>
    <td width="90">deskripsi</td>
    <td width="45">harga</td>
    <td width="45">jumlah</td>
    <td width="118">judul gambar</td>
    <td width="65">gambar</td>
    <td width="108">action</td>
  </tr>
  <?php
  while ($hasil=mysql_fetch_array($tampil)){?>
  <tr>
    <td><?php print"$hasil[barang_kode]"?></td>
    <td><?php print"$hasil[nama_brg]"?></td>
    <td><?php print"$hasil[kategori]"?></td>
    <td><?php print"$hasil[deskripsi]"?></td>
    <td><?php print"$hasil[harga]"?></td>
    <td><?php print"$hasil[jumlah]"?></td>
    <td><?php print"$hasil[judul_gambar]" ?></td>
    <td><?php print"$hasil[gambar]" ?></td>

    <td><a href="index.php?pg=editBarang&kd_brg=<?php echo $hasil['kd_brg']; ?>"class="btn btn-primary btn-xs btn-success" >Edit</a></button>
        <a href="index.php?pg=hapusBarang&kd_brg=<?php echo $hasil['kd_brg']; ?>" class="btn btn-primary btn-xs btn-danger">Hapus</a></button>

  </tr>
  <?php } ?>

</table></center>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>