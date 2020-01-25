<?php
$id_kamar=$_GET['id_kamar'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM info_kamar WHERE id_kamar ='$id_kamar'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Kamar</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        
						
						<div class="form-group">
                            <label for="noBoks" class="col-sm-3 control-label">No Kamar</label>
                            <div class="col-sm-9">
                                <input type="text" name="noBoks" value="<?=$data['id_kamar']?>"class="form-control" id="inputEmail3" placeholder="Nomor Kamar">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tipe" class="col-sm-3 control-label">Tipe</label>
                            <div class="col-sm-9">
                                <input type="text" name="tipe" value="<?=$data['tipe']?>"class="form-control" id="inputEmail3" placeholder="Tipe">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" value="<?=$data['harga']?>"class="form-control" id="inputEmail3" placeholder="Harga" >
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->        

                        <div class="form-group">
                            <label for="deskripsi" class="col-sm-3 control-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <input type="text" name="deskripsi" value="<?=$data['deskripsi']?>" class="form-control" id="inputPassword3" placeholder="Deskripsi">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Arsip</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=kamar&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Kamar
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form$id_kamar=$_POST['id_kamar'];
    $tipe=$_POST['tipe'];
	$harga=$_POST['harga'];
    $deskripsi=$_POST['deskripsi'];
	
    //buat sql
    $sql="UPDATE info_kamar SET tipe='$tipe',harga='$harga',deskripsi='$deskripsi' WHERE id_kamar ='$id_kamar'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=kamar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



