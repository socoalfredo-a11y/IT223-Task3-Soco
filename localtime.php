<?php
    include 'db.php';
    $sql = "SELECT LOCALTIME() AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOCALTIME() result</title>
</head>
<body>

    <h2>LOCALTIME() — Local date/time</h2>
    <p>Query: <code>SELECT LOCALTIME() AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>