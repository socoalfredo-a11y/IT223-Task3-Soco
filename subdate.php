<?php
    include 'db.php';
    $sql = "SELECT SUBDATE(NOW(), INTERVAL 1 DAY) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SUBDATE() result</title>
</head>
<body>
    <h2>SUBDATE — Subtract date/time</h2>
    <p>Query: <code>SELECT SUBDATE(NOW(), INTERVAL 1 DAY);</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>
</body>
</html>
