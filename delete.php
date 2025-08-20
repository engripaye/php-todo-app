<?php
global $conn;
include 'config.php';

if(isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $conn->query("DELETE FROM tasks WHERE  id=$id");

}
header("Location: index.php");
exit;
?>
