<?php
    include 'db.php';
    $sql = "SELECT FLOOR(4.8) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>FLOOR() result</title>
</head>
<body>

    <h2>FLOOR() — Round down</h2>
    <p>Query: <code>SELECT FLOOR(4.8) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>