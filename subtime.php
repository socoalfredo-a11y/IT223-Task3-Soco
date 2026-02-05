<?php
    include 'db.php';
    $sql = "SELECT SUBTIME(NOW(), '01:00:00') AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SUBTIME() result</title>
</head>
<body>
    <h2>SUBTIME — Subtract time</h2>
    <p>Query: <code>SELECT SUBTIME(NOW(), '01:00:00');</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>
</body>
</html>
