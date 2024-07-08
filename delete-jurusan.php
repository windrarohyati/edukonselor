<?php

$id_jurusan=$_GET['id'];

$sql = "DELETE FROM jurusan WHERE id_jurusan='$id_jurusan'";
if ($conn->query($sql) === TRUE) {
    header("Location:?page=jurusan");
}
$conn->close();
?>