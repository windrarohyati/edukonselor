<?php
include 'config.php';
?>
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
        <form action="" method="POST">
        <main id="content">
            <div class="text-primer">
                <h2 class="display-6">Hasil Tes Rekomendasi Jurusan <br>SMK 2 LPPM-RI</h2>
             </div>
                        <div class="form-group">
                            <label for="">Nama Siswa :</label>
                            <input type="text" class="form-control" value="<?php echo $row['nama']; ?>" name="nama" readonly>
                        </div>
                    
                        <!-- tabel kriteria -->
                        <label for="">Kriteria Yang Dimiliki Siswa :</label>
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

                        <!-- Hasil jurusan yang relevan -->
                        <label for="">Rekomendasi Jurusan :</label>
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
                    </main>
        </form>
    </div>
</div>
</main>
<footer class="no-print">
    <div style="padding-top:15px;padding-left:90px;">
        <a class="btn btn-danger no-print" href="tes.php">Ulangi tes</a>
        <a class="btn btn-success no-print" onclick="generatePDF()">Cetak PDF</a>
    </div>
</footer>
                            
