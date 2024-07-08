<!-- Proses tes -->
<?php
date_default_timezone_set("Asia/Jakarta");

if(isset($_POST['proses'])){

    //mengambil data dari form
    $nama=$_POST['nama'];
    $tanggal=date("Y/m/d");

    //proses simpan tes
    $sql = "INSERT INTO tes VALUES (Null, '$tanggal','$nama')";
    mysqli_query($conn,$sql);

    //proses mengambil id minat  bakat
    $id_kriteria=$_POST['id_kriteria'];

    //proses mengambil data tes
    $sql = "SELECT * FROM tes ORDER BY id_tes DESC";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id_tes=$row['id_tes'];

    //proses simpan detail tes
    $jumlah = count($id_kriteria);
    $i=0;
    while($i < $jumlah){
        $id_kriteria1 = $id_kriteria[$i];
        $sql = "INSERT INTO detail_tes VALUES ('$id_tes','$id_kriteria1')";
        mysqli_query($conn,$sql);
        $i++;
    }
    //mengambil data dari tabel jurusan untuk cek di basis rule
    $sql = "SELECT * FROM jurusan";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {

        $id_jurusan = $row['id_jurusan'];
        $jumlah_ya=0;

        //mencari jumlah kriteria di basis rule berdasarkan jurusan
        $sql2 = "SELECT COUNT(id_jurusan) AS jumlah_kriteria 
                FROM basis_rule INNER JOIN detail_basis_rule ON basis_rule.id_rule=detail_basis_rule.id_rule
                WHERE id_jurusan='$id_jurusan'";
        $result2 = $conn->query($sql2);
        $row2 = $result2->fetch_assoc();
        $jumlah_kriteria=$row2['jumlah_kriteria'];

        //mencari minat bakat pada basis rule
        $sql3 = "SELECT id_jurusan, id_kriteria
                FROM basis_rule INNER JOIN detail_basis_rule ON basis_rule.id_rule=detail_basis_rule.id_rule
                WHERE id_jurusan='$id_jurusan'";
        $result3 = $conn->query($sql3);
        while($row3 = $result3->fetch_assoc()) {

            $id_kriteria1=$row3['id_kriteria'];

            //membandingkan apakah yang dipilih pada tes sesuai
            $sql4 = "SELECT id_kriteria
                FROM detail_tes
                WHERE id_tes='$id_tes' AND id_kriteria='$id_kriteria1'";
            $result4 = $conn->query($sql4);
            if($result4->num_rows > 0){
                $jumlah_ya+=1;
            }

        }
        //presentase
        if($jumlah_kriteria>0){
            $peluang = round(($jumlah_ya/$jumlah_kriteria)*100,2);
        }else{
            $peluang=0;
        }
        //simpan data hasil
        if($peluang>0){
            $sql = "INSERT INTO hasil VALUES ('$id_tes','$id_jurusan','$peluang')";
            mysqli_query($conn,$sql);
        }
        header("Location:?page=tes&action=hasil&id_tes=$id_tes");
    }
}


?>
<link rel="stylesheet" href="tes.css">
<div class="row">
    <div class="col-sm-12">
        <form action="" method="POST" name="Form" onsubmit="return validasiForm()">
            <div class="text-primer">
                <h2 class="display-6">Tes Rekomendasi Jurusan</h2>
             </div>
                            <div class="form-group">
                                <label for="">Nama Siswa</label>
                                <input type="text" class="form-control" name="nama" maxlength="50" required>

                            </div>
                            <!-- tabel kriteria -->
                            <div class="form-group">
                                <label for="">Pilih Kriteria yang sesuai dengan dirimu : </label>

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                                    <th width="30px"></th>
                                                    <th width="80px">No.</th>
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

                                <input class="btn btn-primary" type="submit" name="proses" value="Proses">
                            
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    function validasiForm()
    {
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