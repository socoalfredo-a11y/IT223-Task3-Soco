<?php
    include 'db.php';
    $sql = "SELECT CAST(123.45 AS CHAR) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>CAST() result</title>
</head>
<body>

    <h2>CAST() — Cast value to another type</h2>
    <p>Query: <code>SELECT CAST(123.45 AS CHAR) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>