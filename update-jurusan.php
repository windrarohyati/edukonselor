<?php 
    //Mengambil id dari parameter
    $id_jurusan=$_GET['id'];

    if(isset($_POST['update'])){
        $nama_jurusan=$_POST['nama_jurusan'];
        $keterangan=$_POST['keterangan'];
        $mapel=$_POST['mapel'];

        // proses update
        $sql = "UPDATE jurusan SET nama_jurusan='$nama_jurusan',keterangan='$keterangan',mapel='$mapel' WHERE id_jurusan='$id_jurusan'";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=jurusan");
        }
    }
    

    $sql = "SELECT * FROM jurusan WHERE id_jurusan='$id_jurusan'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<div class="row">
    <div class="col-sm-12">
        <form action="" method="POST">
                <div class="text-primer">
                    <h2 class="display-6">Update Data Jurusan</h2>
                </div>
                        <div class="card-body">
                            <div class="text-dark">
                                <label for="">Nama Jurusan</label>
                                <input type="text" class="form-control" name="nama_jurusan" value="<?php echo $row['nama_jurusan']?>" maxlength="50" required>
                            </div>
                            <div class="text-dark">
                                <label for="">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" value="<?php echo $row['keterangan']?>" maxlength="200" required>
                            </div>
                            <div class="text-dark">
                                <label for="">Mata Pelajaran</label>
                                <input type="text" class="form-control" name="mapel" value="<?php echo $row['mapel']?>" maxlength="200" required>
                            </div>
                            <div style="padding-top:15px;">
                                <input class="btn btn-primary" type="submit" name="update" value="Update">
                                <a class="btn btn-danger" href="?page=jurusan">Batal</a>
                            </div>
                </div>
            </div>
        </form>
    </div>
</div>