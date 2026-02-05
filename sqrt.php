<?php
    include 'db.php';
    $sql = "SELECT SQRT(16) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>SQRT() result</title>
</head>
<body>

    <h2>SQRT() — Square root</h2>
    <p>Query: <code>SELECT SQRT(16) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>