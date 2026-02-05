<?php
    include 'db.php';
    $sql = "SELECT LOCALTIMESTAMP() AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOCALTIMESTAMP() result</title>
</head>
<body>

    <h2>LOCALTIMESTAMP() — Local timestamp</h2>
    <p>Query: <code>SELECT LOCALTIMESTAMP() AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>