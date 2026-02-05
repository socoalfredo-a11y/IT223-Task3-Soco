<?php
    include 'db.php';
    $sql = "SELECT DATEDIFF('2025-01-10','2025-01-01') AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>DATEDIFF() result</title>
</head>
<body>

    <h2>DATEDIFF() — Difference in days</h2>
    <p>Query: <code>SELECT DATEDIFF('2025-01-10','2025-01-01') AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>