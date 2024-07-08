<div class="text-primer">
            <h2 class="display-6">Data Jurusan</h2>
            <a class="btn btn-primary mb-2" href="?page=jurusan&action=tambah">Tambah</a>
        <table class="table table-bordered" id="myTable">
            <thead>
            <tr>
                <th width="50px">No.</th>
                <th width="200px">Nama Jurusan</th>
                <th width="300px">Keterangan</th>
                <th width="300px">Mata Pelajaran</th>
                <th width="200px"></th>
            </tr>
            </thead>
        <tbody>
    <?php
        $no=1;
        $sql = "SELECT*FROM jurusan ORDER BY nama_jurusan ASC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama_jurusan']; ?></td>
            <td><?php echo $row['keterangan']; ?></td>
            <td><?php echo $row['mapel']; ?></td>
            <td align="center">
                <a class="btn btn-warning" href="?page=jurusan&action=update&id=<?php echo $row['id_jurusan']; ?>">
                    <i class="fas fa-edit"></i>
                </a>
                <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=jurusan&action=hapus&id=<?php echo $row['id_jurusan']; ?>">
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