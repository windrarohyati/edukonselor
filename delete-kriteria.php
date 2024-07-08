<?php

$id_kriteria=$_GET['id'];

$sql = "DELETE FROM kriteria WHERE id_kriteria='$id_kriteria'";
if ($conn->query($sql) === TRUE) {
    header("Location:?page=kriteria");
}
$conn->close();
?>