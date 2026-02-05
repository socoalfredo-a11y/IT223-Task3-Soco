<?php
    include 'db.php';
    $sql = "SELECT NOW() AS `current_time`";
    $result = $conn->query($sql);
    if (!$result) {
        $error = $conn->error;
    }
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head><title>NOW() result</title></head>
<body>
    <h2>NOW() — Current Date & Time</h2>
    <p>Query: <code>SELECT NOW() AS `current_time`</code></p>
    <p>Result: <?php if (!empty($error)) { echo '(query error: ' . htmlspecialchars($error) . ')'; } else { echo isset($row['current_time']) ? htmlspecialchars($row['current_time']) : '(no data)'; } ?></p>
</body>
</html>