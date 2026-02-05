<?php
    include 'db.php';
    $sql = "SELECT SECOND(NOW()) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>SECOND() result</title>
</head>
<body>

    <h2>SECOND() — Seconds</h2>
    <p>Query: <code>SELECT SECOND(NOW()) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>