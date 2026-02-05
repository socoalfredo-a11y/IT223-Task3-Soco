<?php
    include 'db.php';
    $sql = "SELECT DATABASE() AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>DATABASE() result</title>
</head>
<body>

    <h2>DATABASE() — Current default database</h2>
    <p>Query: <code>SELECT DATABASE() AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>