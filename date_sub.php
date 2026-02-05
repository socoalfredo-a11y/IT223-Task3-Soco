<?php
    include 'db.php';
    $sql = "SELECT DATE_SUB('2025-01-10', INTERVAL 5 DAY) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>DATE_SUB() result</title>
</head>
<body>

    <h2>DATE_SUB() — Subtract interval</h2>
    <p>Query: <code>SELECT DATE_SUB('2025-01-10', INTERVAL 5 DAY) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>