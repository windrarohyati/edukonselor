<div class="text-primer">
            <h2 class="display-6">Data Basis Rule</h2>
            <a class="btn btn-primary mb-2" href="?page=basis_rule&action=tambah">Tambah</a>
        <table class="table table-bordered" id="myTable">
            <thead>
            <tr>
                <th width="50px">No.</th>
                <th width="150px">Nama jurusan</th>
                <th width="300px">Keterangan</th>
                <th width="250px"></th>
            </tr>
            </thead>
        <tbody>
    <?php
        $no=1;
        $sql = "SELECT basis_rule.id_rule, basis_rule.id_jurusan, jurusan.nama_jurusan, jurusan.keterangan FROM basis_rule INNER JOIN jurusan ON basis_rule.id_jurusan=jurusan.id_jurusan ORDER BY nama_jurusan ASC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama_jurusan']; ?></td>
            <td><?php echo $row['keterangan']; ?></td>
            <td align="center">
                <a class="btn btn-info" href="?page=basis_rule&action=detail&id=<?php echo $row['id_rule']; ?>">
                    <i class="fas fa-list"></i>
                </a>
                <a class="btn btn-warning" href="?page=basis_rule&action=update&id=<?php echo $row['id_rule']; ?>">
                    <i class="fas fa-edit"></i>
                </a>
                <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=basis_rule&action=hapus&id=<?php echo $row['id_rule']; ?>">
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