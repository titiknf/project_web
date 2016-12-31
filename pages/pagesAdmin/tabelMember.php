<br/>
<br />

<style>
.tabelMember{
  color: A64D00;
}



</style>
<?php
$tampil=mysql_query("select * from member");
$no=1;
?>
<br>
<br>
<br>
</center><center>
  <table class="table table">
    <tr>
    <td width="35">#</td>
    <td width="88">Nama</td>
    <td width="100">level</td>
    <td width="100">PASSWORD</td>
    <td width="92">GENDER</td>
    <td width="130">EMAIL</td>
    <td width="108">ALAMAT</td>
    <td width="108">KODE POS</td>
    <td width="108">KOTA</td>
    <td width="108">Telepon</td>
    <td width="108">Action</td>
  </tr>
  <?php
  while ($hasil=mysql_fetch_array($tampil)){?>
  <tr>
    <td><?php print"$no"?></td>
    <td><?php print"$hasil[nama]"?></td>
    <td><?php print"$hasil[level]"?></td>
    <td><?php print"$hasil[password]"?></td>
    <td><?php print"$hasil[gender]"?></td>
    <td><?php print"$hasil[email]"?></td>
    <td><?php print"$hasil[alamat]"?></td>
    <td><?php print"$hasil[kodepos]"?></td>
    <td><?php print"$hasil[kota]"?></td>
    <td><?php print"$hasil[telp]" ?></td>

    <td><a href="index.php?pg=editMember&id_member=<?php echo $hasil['id_member']; ?>" class="btn btn-primary btn-xs btn-success">Edit</a>
        <a href="index.php?pg=hapusMember&id_member=<?php echo $hasil['id_member']; ?>" class="btn btn-primary btn-xs btn-danger">Hapus</a>
    </td>
    <?php $no++ ?>
  </tr>
  <?php } ?>
</table></center>