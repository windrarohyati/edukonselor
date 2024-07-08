<?php

if(isset($_POST['simpan'])){
    //mengambil data
    $kriteria=$_POST['kriteria'];
	
	//proses simpan
        $sql = "INSERT INTO kriteria VALUES (Null, '$kriteria')";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=kriteria");
        }
    }
?>
<div class="row">
    <div class="col-sm-12">
        <form action="" method="POST">
            <div class="text-primer">
                <h2 class="display-6">Tambah Kriteria Jurusan</h2>
            </div>
                            <div class="text-dark">
                                <label for="">Kriteria Jurusan</label>
                                <input type="text" class="form-control" name="kriteria" maxlength="200" required>
                            </div>
                            <div class="form-group" style="padding-top:15px;">
                                <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                                <a class="btn btn-danger" href="?page=kriteria">Batal</a>
                            </div>  
                </div>
            </div>
        </form>
    </div>
</div>