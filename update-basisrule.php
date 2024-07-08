<!-- proses menampilkan data penyakit dari basis rule -->
<?php 
    //Mengambil id dari parameter
    $id_rule=$_GET['id'];
    
    $sql = "SELECT basis_rule.id_rule, basis_rule.id_jurusan, jurusan.nama_jurusan
            FROM basis_rule INNER JOIN jurusan ON basis_rule.id_jurusan=jurusan.id_jurusan WHERE id_rule='$id_rule'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    //proses update
    if(isset($_POST['update'])){
        $id_kriteria=$_POST['id_kriteria'];
        //proses simpan 
        if($id_kriteria != Null){
            $jumlah = count($id_kriteria);
            $i=0;
            while($i < $jumlah){
                $id_kriteria1 = $id_kriteria[$i];
                $sql = "INSERT INTO detail_basis_rule VALUES ('$id_rule','$id_kriteria1')";
                mysqli_query($conn,$sql);
                $i++;
            }
        }
        header("Location:?page=basis_rule");
    }
?>
<div class="row">
    <div class="col-sm-12">
        <form action="" method="POST">
            <div class="text-primer">
                <h2 class="display-6">Update Data Basis Rule</h2>
             </div>                        
                        <div class="card-body">
                        <div class="text-dark">
                                <label for="">Nama Jurusan</label>
                                <input type="text" class="form-control" value="<?php echo $row['nama_jurusan'];?>" name="nama_jurusan" readonly>
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
                                                <th width="50px"></th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no=1;                                           
                                                $sql = "SELECT*FROM kriteria ORDER BY kriteria ASC";
                                                $result = $conn->query($sql);
                                                while($row = $result->fetch_assoc()) {

                                                    $id_kriteria=$row['id_kriteria'];

                                                    //cek ke tabel detail basis rule
                                                    $sql2 = "SELECT * FROM detail_basis_rule WHERE id_rule='$id_rule' AND id_kriteria='$id_kriteria'";
                                                    $result2 = $conn->query($sql2);
                                                    if ($result2->num_rows > 0) {

                                            //Jika ditemukan maka tamplan datanya checklist mati hapus aktif                                    
                                            ?>
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="check-item" disabled="disabled"></td>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $row['kriteria']; ?></td>
                                                    <td align="center">
                                                        <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=basis_rule&action=delete_kriteria&id_rule=<?php echo $id_rule ?>&id_kriteria=<?php echo $id_kriteria?>">
                                                            <i class="fas fa-eraser"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
                                                }else{
                                            //Jika tidak ditemukan maka checklist aktif hapus mati                              
                                            ?>            
                                                <tr>
                                                    <td align="center"><input type="checkbox" class="check-item" name="<?php echo 'id_kriteria[]'; ?>" value="<?php echo $row['id_kriteria']; ?>"></td>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $row['kriteria']; ?></td>
                                                    <td align="center">
                                                        <i class="fas fa-eraser"></i>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                                $conn->close();
                                            ?>
                                        
                                                
                                        </tbody>
                                    </table>
                            </div>

                                <input class="btn btn-primary" type="submit" name="update" value="Update">
                                <a class="btn btn-danger" href="?page=basis_rule">Batal</a>
                    </div>
                </div>
            </form>
        </div>