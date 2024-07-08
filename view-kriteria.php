    <body>
        <div class="text-primer">
            <h2 class="display-6">Data Kriteria Jurusan</h2>
            <a class="btn btn-primary mb-2" href="?page=kriteria&action=tambah">Tambah</a>
        </div>
        <table class="table table-bordered teks" id="myTable">
            <thead>
            <tr>
                <th width="70px">No.</th>
                <th width="650px">Kriteria Jurusan</th>
                <th width="150px"></th>
            </tr>
            </thead>
        <tbody>
    <?php
        $no=1;
        $sql = "SELECT*FROM kriteria ORDER BY kriteria";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['kriteria']; ?></td>
            <td align="center">
                <a class="btn btn-warning" href="?page=kriteria&action=update&id=<?php echo $row['id_kriteria']; ?>">
                    <i class="fas fa-edit"></i>
                </a>
                <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="?page=kriteria&action=hapus&id=<?php echo $row['id_kriteria']; ?>">
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
</body>