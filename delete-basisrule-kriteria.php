<?php

$id_rule=$_GET['id_rule'];
$id_kriteria=$_GET['id_kriteria'];

$sql = "DELETE FROM detail_basis_rule WHERE id_rule='$id_rule' AND id_kriteria='$id_kriteria'";
if ($conn->query($sql) === TRUE) {
    header("Location:?page=basis_rule");
}
$conn->close();
?>