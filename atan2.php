<?php
    include 'db.php';
    $sql = "SELECT ATAN2(1,1) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>ATAN2() result</title>
</head>
<body>

    <h2>ATAN2() — Arc tangent of two numbers</h2>
    <p>Query: <code>SELECT ATAN2(1,1) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>