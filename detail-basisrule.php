<!-- proses menampilkan data basis rule-->
<?php 
    $id_rule=$_GET['id'];

    $sql = "SELECT basis_rule.id_rule, basis_rule.id_jurusan, jurusan.nama_jurusan, jurusan.keterangan
            FROM basis_rule INNER JOIN jurusan ON basis_rule.id_jurusan =jurusan.id_jurusan 
            WHERE basis_rule.id_rule='$id_rule'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<div class="row">
    <div class="col-sm-12">
        <form action="" method="POST">
            <div class="text-primer">
                <h2 class="display-6">Detail Basis Rule</h2>
             </div>                        
                <div class="card-body">
                        <div class="text-dark">
                            <label for="">Nama Jurusan</label>
                            <input type="text" class="form-control" value="<?php echo $row['nama_jurusan']?>" name="nama_jurusan" readonly>
                        </div>
                        <div class="text-dark">
                            <label for="">Keterangan</label>
                            <input type="text" class="form-control" value="<?php echo $row['keterangan']?>" name="keterangan" readonly>
                        </div>
                        <!-- tabel kriteria -->
                        <div class="text-dark">
                        <label for="">Kriteria yang dimiliki Siswa :</label>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="20px">No.</th>
                                    <th width="700px">Kriteria</th>
                                </tr>
                            </thead>
                            <tbody>
                        </div>
                            <?php
                                $no=1;
                                $sql = "SELECT detail_basis_rule.id_rule, detail_basis_rule.id_kriteria, kriteria.kriteria 
                                        FROM detail_basis_rule
                                        INNER JOIN kriteria ON detail_basis_rule.id_kriteria=kriteria.id_kriteria 
                                        WHERE detail_basis_rule.id_rule='$id_rule'";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['kriteria']; ?></td>
                                </tr>
                            <?php
                                }
                                $conn->close();
                            ?>
                            </tbody>
                        </table>
                        <a class="btn btn-danger" href="?page=basis_rule">Kembali</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>