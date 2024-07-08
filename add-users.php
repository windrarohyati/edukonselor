<?php

if(isset($_POST['simpan'])){
    //mengambil data
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $role=$_POST['role'];
	
	//proses simpan
        $sql = "INSERT INTO users VALUES (Null, '$username','$password','$role')";
        if ($conn->query($sql) === TRUE) {
            header("Location:?page=users");
        }
    }
?>
<div class="row">
    <div class="col-sm-12">
        <form action="" method="POST">
            <div class="text-primer">
                <h2 class="display-6">Tambah Data Users</h2>
             </div>                         
             <div class="card-body">
                            <div class="text-dark">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username" maxlength="20" required>
                            </div>
                            <div class="text-dark">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" maxlength="10" required>
                            </div>
                            <div class="text-dark">
                                <label for="">Role </label>
                                <select class="form-control chosen" data-placeholder="Pilih Role" name="role">
                                    <option value=""></option>
                                    <option value="Guru">Guru</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Kepsek">Kepala Sekolah</option>
                                </select>
                            </div>
                            <div style="padding-top:15px;">
                                <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                                <a class="btn btn-danger" href="?page=users">Batal</a>
                            </div>
                </div>
            </div>
        </form>
    </div>
</div>