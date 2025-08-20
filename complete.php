<?php
global $conn;
include 'config.php';

if(isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $conn->query("UPDATE tasks SET is_completed = TRUE WHERE id= $id");

}
header("Location: index.php");
exit;
?>