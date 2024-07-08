<body>
        <div class="text-primer">
            <h2 class="display-6">Data Hasil Rekomedasi</h2>
        </div>  
            <table class="table table-bordered" id="myTable">
                <thead>
                <tr>
                    <th width="30px">No.</th>
                    <th width="150px">Tanggal</th>
                    <th width="450px">Nama Siswa</th>
                    <th width="100px"></th>
                </tr>
                </thead>
            <tbody>
        <?php
            $no=1;
            $sql = "SELECT * FROM tes ORDER BY tanggal DESC";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td align="center">
                    <a class="btn btn-info" href="?page=data-hasil&action=detail&id_tes=<?php echo $row['id_tes']; ?>">
                        <i class="fas fa-list"></i>
                    </a>
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