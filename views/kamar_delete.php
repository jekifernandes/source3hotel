<?php
//membuat query untuk hapus data
$sql="DELETE FROM info_kamar WHERE id_kamar ='".$_GET['id_kamar']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=kamar&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=kamar&actions=tampil');</scripr>";
}

