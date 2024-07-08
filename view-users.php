<div class="text-primer">
            <h2 class="display-6">Data Users</h2>
        <a class="btn btn-primary mb-2" href="?page=users&action=tambah">Tambah</a>
        <table class="table table-bordered" id="myTable">
            <thead>
            <tr>
                <th width="50px">No.</th>
                <th width="300px">Username</th>
                <th width="300px">Role</th>
                <th width="150px"></th>
            </tr>
            </thead>
        <tbody>
    <?php
        $no=1;
        $sql = "SELECT*FROM users ORDER BY username ASC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['role']; ?></td>
            <td align="center">
                <a class="btn btn-warning" href="?page=users&action=update&id_user=<?php echo $row['id_user']; ?>">
                    <i class="fas fa-edit"></i>
                </a>
                <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=users&action=hapus&id_user=<?php echo $row['id_user']; ?>">
                    <i class="fas fa-eraser"></i>
                </a>
            </td>
        </tr>
    <?php
        }
        $conn->close();
    ?>
   </tbody>
</table>
</div>
</div>