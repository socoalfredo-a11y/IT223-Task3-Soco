<?php
    include 'db.php';
    $sql = "SELECT POWER(2,3) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>POWER() result</title>
</head>
<body>

    <h2>POWER() — Power function</h2>
    <p>Query: <code>SELECT POWER(2,3) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>
