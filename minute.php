<?php
    include 'db.php';
    $sql = "SELECT MINUTE(NOW()) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>MINUTE() result</title>
</head>
<body>

    <h2>MINUTE() — Minute part</h2>
    <p>Query: <code>SELECT MINUTE(NOW()) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>