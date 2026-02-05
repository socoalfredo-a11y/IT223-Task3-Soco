<?php
    include 'db.php';
    $sql = "SELECT CURRENT_TIMESTAMP() AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>CURRENT_TIMESTAMP() result</title>
</head>
<body>

    <h2>CURRENT_TIMESTAMP() — Current date & time</h2>
    <p>Query: <code>SELECT CURRENT_TIMESTAMP() AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>