<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Kamar</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="id_kamar" class="col-sm-3 control-label">Nomor Kamar</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_kamar" class="form-control"  placeholder="Inputkan Nomor kamar atau Lemari" required>
                            </div>
                        </div>
                        
                         
                         <div class="form-group">
                            <label for="tipe" class="col-sm-3 control-label">Tipe</label>
                            <div class="col-sm-9">
                                <input type="text" name="tipe" class="form-control"  placeholder="Inputkan Tipe" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga"class="form-control"  placeholder="Inputkan Harga" required>
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <label for="deskripsi" class="col-sm-3 control-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <input type="text" name="deskripsi" class="form-control"  placeholder="Inputkan Deskripsi" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Arsip</button>
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
    //Ambil data dari form
    $id_kamar=$_POST['id_kamar'];
    $tipe=$_POST['tipe'];
    $harga=$_POST['harga'];
    $deskripsi=$_POST['deskripsi'];

    //buat sql
    $sql="INSERT INTO info_kamar VALUES ('$id_kamar','$tipe','$harga','$deskripsi')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Kamar Error");
    if ($query){
        echo "<script>window.location.assign('?page=kamar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
