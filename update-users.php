<?php 
    //Mengambil id dari parameter
    $id_user=$_GET['id_user'];

    if(isset($_POST['update'])){
        $role=$_POST['role'];

        // proses update
        $sql = "UPDATE users SET role='$role' WHERE id_user='$id_user'";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=users");
        }
    }
    

    $sql = "SELECT * FROM users WHERE id_user='$id_user'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<div class="row">
    <div class="col-sm-12">
        <form action="" method="POST">
            <div class="text-primer">
                <h2 class="display-6">Update Data Users</h2>
             </div>                        
                        <div class="card-body">
                            <div class="text-dark">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username" value="<?php echo $row['username']?>"readonly>
                            </div>
                            <div class="text-dark">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" value="<?php echo $row['password']?>" readonly>
                            </div>
                            <div class="text-dark">
                                <label for="">Role</label>
                                <select class="form-control chosen" data-placeholder="Pilih Role" name="role">
                                    <option value="<?php echo $row['role'];?>"><?php echo $row['role'];?></option>
                                    <option value="guru">Guru</option>
                                    <option value="admin">Admin</option>
                                    <option value="Kepsek">Kepala Sekolah</option>
                                </select>
                            </div>
                            <div style="padding-top:15px;">
                                <input class="btn btn-primary" type="submit" name="update" value="Update">
                                <a class="btn btn-danger" href="?page=users">Batal</a>
                            </div>
                </div>
            </div>
        </form>
    </div>
</div>