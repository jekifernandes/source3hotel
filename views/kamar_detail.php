<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Kamar</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM info_kamar WHERE id_kamar ='" . $_GET ['id_kamar'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>No Kamar</td>
                            <td><?= $data['id_kamar'] ?></td>
                        </tr>
                        <tr>
                            <td width="200">Tipe</td> <td><?= $data['tipe'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga</td> <td><?= $data['harga'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=kamar&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke data kamar </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

