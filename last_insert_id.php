<?php
    include 'db.php';
    $sql = "SELECT LAST_INSERT_ID() AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>LAST_INSERT_ID() result</title>
</head>
<body>

    <h2>LAST_INSERT_ID() — Last autoincrement id for this connection</h2>
    <p>Query: <code>SELECT LAST_INSERT_ID() AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>