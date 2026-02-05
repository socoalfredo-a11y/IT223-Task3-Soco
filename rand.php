<?php
    include 'db.php';
    $sql = "SELECT RAND() AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>RAND() result</title>
</head>
<body>

    <h2>RAND() — Random number</h2>
    <p>Query: <code>SELECT RAND() AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>