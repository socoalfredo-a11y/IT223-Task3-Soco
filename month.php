<?php
    include 'db.php';
    $sql = "SELECT MONTH(NOW()) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html><head><title>MONTH() result</title></head><body>
<head>
    <title>MONTH() result</title>
</head>
<body>

    <h2>MONTH() — Month number</h2>
    <p>Query: <code>SELECT MONTH(NOW()) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>