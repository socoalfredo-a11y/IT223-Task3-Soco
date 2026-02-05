<?php
    include 'db.php';
    $sql = "SELECT DAYOFWEEK(NOW()) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>DAYOFWEEK() result</title>
</head>
<body>

    <h2>DAYOFWEEK() — Day of week</h2>
    <p>Query: <code>SELECT DAYOFWEEK(NOW()) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>