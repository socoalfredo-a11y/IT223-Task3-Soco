<?php
    include 'db.php';
    $sql = "SELECT ABS(-5) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>ABS() result</title>
</head>
<body>

    <h2>ABS() — Absolute value</h2>
    <p>Query: <code>SELECT ABS(-5) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>
    
</body>
</html>