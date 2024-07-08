<?php

if(isset($_POST['simpan'])){
    //mengambil data dari form
    $nama_jurusan=$_POST['nama_jurusan'];
	
    // validasi
    $sql = "SELECT basis_rule.id_rule, basis_rule.id_jurusan, jurusan.nama_jurusan 
            FROM basis_rule 
            INNER JOIN jurusan 
            ON basis_rule.id_jurusan = jurusan.id_jurusan  
            WHERE nama_jurusan='$nama_jurusan'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Data basis rule jurusan tersebut sudah ada!</strong>
            </div>
        <?php
    }else{

        //mengambil data jurusan
        $sql = "SELECT * FROM jurusan WHERE nama_jurusan='$nama_jurusan'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $id_jurusan	= $row['id_jurusan'];
	    
        //proses simpan basis rule
        $sql = "INSERT INTO basis_rule VALUES (Null, $id_jurusan)";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=basis_rule");
        }

        //proses mengambil id minat  bakat
        $id_kriteria=$_POST['id_kriteria'];

        //proses mengambil data basis rule
        $sql = "SELECT * FROM basis_rule ORDER BY id_rule DESC";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $id_rule=$row['id_rule'];

        //proses simpan detail basis rule
        $jumlah = count($id_kriteria);
        $i=0;
        while($i < $jumlah){
            $id_kriteria1 = $id_kriteria[$i];
            $sql = "INSERT INTO detail_basis_rule VALUES ('$id_rule','$id_kriteria1')";
            mysqli_query($conn,$sql);
            $i++;
        }
        header("Location:?page=basis_rule");
        }
    }
?>

<div class="row">
    <div class="col-sm-12">
        <form action="" method="POST" name="Form" onsubmit="return validasiForm()">
            <div class="text-primer">
                <h2 class="display-6">Tambah Data Basis Rule</h2>
            </div>                        
                <div class="card-body">
                            <div class="text-dark">
                                <label for="">Nama Jurusan</label>
                                    <select class="form-control chosen" data-placeholder="Pilih Nama Jurusan" name="nama_jurusan">
                                    <option value=""></option>
                                    <?php
                                        $sql = "SELECT * FROM jurusan ORDER BY nama_jurusan ASC";
                                        $result = $conn->query($sql);
                                        while($row = $result->fetch_assoc()) {
                                    ?>
                                        <option value="<?php echo $row['nama_jurusan']; ?>"><?php echo $row['nama_jurusan']; ?></option>
                                    <?php
                                        }
                                    ?>
                                    </select>
                            </div>
                            <!-- tabel kriteria -->
                            <div class="text-dark">
                                <label for="">Pilih kriteria yang sesuai dengan jurusan : </label>

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="30px"></th>
                                                <th width="30px">No.</th>
                                                <th width="700px">Kriteria</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no=1;                                           
                                                $sql = "SELECT*FROM kriteria ORDER BY kriteria ASC";
                                                $result = $conn->query($sql);
                                                while($row = $result->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><input type="checkbox" class="check-item" name="<?php echo 'id_kriteria[]'; ?>" value="<?php echo $row['id_kriteria']; ?>"></td>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $row['kriteria']; ?></td>
                                                </tr>
                                            <?php
                                                }
                                                $conn->close();
                                            ?>
                                        </tbody>
                                    </table>
                            </div>

                                <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                                <a class="btn btn-danger" href="?page=basis_rule">Batal</a>
                            
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    function validasiForm()
    {
        //validasi nama jurusan
        var nama_jurusan = document.forms["Form"]["nama_jurusan"].value;

        if(nama_jurusan==""){
            alert("Pilih nama jurusan");
            return false;
        }
        //validasi kriteria
        var checkbox=document.getElementsByName('<?php echo 'id_kriteria[]'; ?>');
        
        var isChecked=false;

        for(var i=0;i<checkbox.length;i++){
            if(checkbox[i].checked){
                isChecked = true;
                break;
            }
        }
        //jika belum check
        if(!isChecked){
            alert("Pilih setidaknya satu kriteria");
            return false;
        }
        return true;
    }
</script>