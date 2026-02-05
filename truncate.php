<?php
    include 'db.php';
    $sql = "SELECT TRUNCATE(4.567,1) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>TRUNCATE() result</title>
</head>
<body>

    <h2>TRUNCATE() — Truncate decimal</h2>
    <p>Query: <code>SELECT TRUNCATE(4.567,1) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>