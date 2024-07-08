<?php 
    //Mengambil id dari parameter
    $id_kriteria=$_GET['id'];

    if(isset($_POST['update'])){
        $kriteria=$_POST['kriteria'];

        // proses update
        $sql = "UPDATE kriteria SET kriteria='$kriteria' WHERE id_kriteria='$id_kriteria'";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=kriteria");
        }
    }
    

    $sql = "SELECT * FROM kriteria WHERE id_kriteria='$id_kriteria'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<div class="row">
    <div class="col-sm-12">
        <form action="" method="POST">
        <div class="text-primer">
            <h2 class="display-6">Update Data Kriteria Jurusan</h2>
        </div>
                            <div class="text-dark">
                                <label for="">Kriteria Jurusan</label>
                                <input type="text" class="form-control" name="kriteria" value="<?php echo $row['kriteria']?>" maxlength="200" required>
                            </div>
                            <div class="form-group" style="padding-top:15px;">
                                <input class="btn btn-primary" type="submit" name="update" value="Update">
                                <a class="btn btn-danger" href="?page=kriteria">Batal</a>
                            </div>
                </div>
            </div>
        </form>
    </div>
</div>