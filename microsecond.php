<?php
    include 'db.php';
    $sql = "SELECT MICROSECOND(NOW()) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>MICROSECOND() result</title>
</head>
<body>

    <h2>MICROSECOND() — Microseconds</h2>
    <p>Query: <code>SELECT MICROSECOND(NOW()) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>
