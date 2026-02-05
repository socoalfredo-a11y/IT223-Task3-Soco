<?php
    include 'db.php';
    $sql = "SELECT VERSION() AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>VERSION() result</title>
</head>
<body>

    <h2>VERSION() — Server version</h2>
    <p>Query: <code>SELECT VERSION() AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>