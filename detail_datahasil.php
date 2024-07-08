<!-- proses menampilkan hasil tes-->
<?php
    
    $id_tes=$_GET['id_tes'];

    $sql = "SELECT * FROM tes 
            WHERE id_tes='$id_tes'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<!-- halaman hasil tes-->
<div class="row">
    <div class="col-sm-12">
        <div class="text-primer">
            <h2 class="display-6">Data Hasil Rekomedasi Jurusan</h2>
        </div>
            <form action="" method="POST">
                        <div class="text-dark">
                            <label class="">Nama Siswa :</label>
                            <input type="text" class="form-control " value="<?php echo $row['nama']; ?>" name="nama" readonly>
                        </div>
                    
                        <!-- tabel kriteria -->
                        <div class="text-dark">
                        <label class="">Kriteria Yang Dimiliki Siswa :</label>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="20px">No.</th>
                                    <th width="700px">Kriteria</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $no=1;
                                $sql = "SELECT detail_tes.id_tes, detail_tes.id_kriteria, kriteria.kriteria 
                                        FROM detail_tes
                                        INNER JOIN kriteria ON detail_tes.id_kriteria=kriteria.id_kriteria 
                                        WHERE id_tes='$id_tes'";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['kriteria']; ?></td>
                                </tr>
                            <?php
                                }
                            ?>
                            </tbody>
                        </table>
                            </div>
                        <!-- Hasil jurusan yang relevan -->
                        <div class="text-dark">
                        <label class="">Rekomendasi Jurusan :</label>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="20px">No.</th>
                                    <th width="500px">Nama Jurusan</th>
                                    <th width="300px">Persentase</th>
                                    <th width="800px">Keterangan</th>
                                    <th width="800px">Mata Pelajaran</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $no=1;
                                $sql = "SELECT hasil.id_tes, hasil.id_jurusan, jurusan.nama_jurusan, jurusan.keterangan, jurusan.mapel, hasil.persentase
                                        FROM hasil
                                        INNER JOIN jurusan ON hasil.id_jurusan=jurusan.id_jurusan
                                        WHERE id_tes='$id_tes' ORDER BY persentase DESC";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['nama_jurusan']; ?></td>
                                    <td><?php echo $row['persentase']."%"; ?></td>
                                    <td><?php echo $row['keterangan']; ?></td>
                                    <td><?php echo $row['mapel']; ?></td>
                                </tr>
                            <?php
                                }
                                $conn->close();
                            ?>
                            </tbody>
                        </table>
                            </div>
                        <a class="btn btn-danger" href="?page=data-hasil">Kembali</a>
            </div>        
        </form>
    </div>
</div>