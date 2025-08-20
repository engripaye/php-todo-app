<?php
global $conn;
include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>📋 Task Manager</h2>

<! --Add Task Form--!>
<form action="add.php" method="post">
    <input type="text" name="title" placeholder="Enter new task..." required>
    <button type="submit">Add Task</button>
</form>

<h3>My Tasks</h3>
<ul>
    <?php
    $result = $conn->query("SELECT * FROM tasks ORDER BY created_at DESC");
    while ($row = $result->fetch_assoc()) {
        echo "<li>";
        if($row['is_completed']) {
            echo "<s>" .htmlspecialchars($row['title']) . "</s>";

        }else {
            echo htmlspecialchars($row['title']);
            echo " <a href='complete.php?id=" . $row['id'] . "'>✔️</a>";

        }
        echo " <a href='delete.php?id=" . $row['id'] . "'>❌</a>";
        echo "</li>";
    }
    ?>
</ul>
</body>
</html>
