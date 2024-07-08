<?php

$id_user=$_GET['id_user'];

$sql = "DELETE FROM users WHERE id_user='$id_user'";
if ($conn->query($sql) === TRUE) {
    header("Location:?page=users");
}
$conn->close();
?>