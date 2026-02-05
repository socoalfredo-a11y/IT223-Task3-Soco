<?php
    include 'db.php';
    $sql = "SELECT CURTIME() AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>CURTIME() result</title>
</head>
<body>

    <h2>CURTIME() — Current time</h2>
    <p>Query: <code>SELECT CURTIME() AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>