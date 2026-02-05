<?php
    include 'db.php';
    $sql = "SELECT SYSTEM_USER() AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>SYSTEM_USER() result</title>
</head>
<body>

    <h2>SYSTEM_USER() — System user</h2>
    <p>Query: <code>SELECT SYSTEM_USER() AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>