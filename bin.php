<?php
    include 'db.php';
    $sql = "SELECT BIN(5) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>BIN() result</title>
</head>
<body>

    <h2>BIN() — Convert number to binary</h2>
    <p>Query: <code>SELECT BIN(5) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>