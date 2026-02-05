<?php
    include 'db.php';
    $sql = "SELECT LAST_DAY(NOW()) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>LAST_DAY() result</title>
</head>
<body>

    <h2>LAST_DAY() — Last day of month</h2>
    <p>Query: <code>SELECT LAST_DAY(NOW()) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>