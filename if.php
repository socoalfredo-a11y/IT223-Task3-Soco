<?php
    include 'db.php';
    $sql = "SELECT IF(1=1, 'yes', 'no') AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>IF() result</title>
</head>
<body>

    <h2>IF() — Conditional function</h2>
    <p>Query: <code>SELECT IF(1=1, 'yes', 'no') AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>