<?php

//mengambil id dari parameter
$id_rule=$_GET['id'];

//hapus basis rule
$sql = "DELETE FROM basis_rule WHERE id_rule='$id_rule'";
$conn->query($sql);

//hapus detail basis rule
$sql = "DELETE FROM detail_basis_rule WHERE id_rule='$id_rule'";
$conn->query($sql);

header("Location:?page=basis_rule");
$conn->close();
?>