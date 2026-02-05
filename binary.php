<?php
    include 'db.php';
    $sql = "SELECT BINARY 'a' = 'A' AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>BINARY result</title>
</head>
<body>

    <h2>BINARY — Binary string comparison</h2>
    <p>Query: <code>SELECT BINARY 'a' = 'A' AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>