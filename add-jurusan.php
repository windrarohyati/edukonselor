<?php

if(isset($_POST['simpan'])){
    //mengambil data
    $nama_jurusan=$_POST['nama_jurusan'];
    $keterangan=$_POST['keterangan'];
    $mapel=$_POST['mapel'];
	
	//proses simpan
        $sql = "INSERT INTO jurusan VALUES (Null, '$nama_jurusan','$keterangan','$mapel')";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=jurusan");
        }
    }
?>
<div class="row">
    <div class="col-sm-12">
        <form action="" method="POST">
            <div class="text-primer">
                <h2 class="display-6">Tambah Data Jurusan</h2>
            </div>
                        <div class="card-body">
                            <div class="text-dark">
                                <label for="">Nama Jurusan</label>
                                <input type="text" class="form-control" name="nama_jurusan" maxlength="50" required>
                            </div>
                            <div class="text-dark">
                                <label for="">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" maxlength="200" required>
                            </div>
                            <div class="text-dark">
                                <label for="">Mata Pelajaran</label>
                                <input type="text" class="form-control" name="mapel" maxlength="200" required>
                            </div>
                            <div style="padding-top:15px;">
                                <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                                <a class="btn btn-danger" href="?page=jurusan">Batal</a>
                            </div>
                </div>
            </div>
        </form>
    </div>
</div>