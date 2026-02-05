<?php
    include 'db.php';
    $sql = "SELECT RADIANS(180) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>RADIANS() result</title>
</head>
<body>

    <h2>RADIANS() — Degrees to radians</h2>
    <p>Query: <code>SELECT RADIANS(180) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>