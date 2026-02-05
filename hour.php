<?php
    include 'db.php';
    $sql = "SELECT HOUR(NOW()) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>HOUR() result</title>
</head>
<body>

    <h2>HOUR() — Hour part</h2>
    <p>Query: <code>SELECT HOUR(NOW()) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>