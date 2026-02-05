<?php
    include 'db.php';
    $sql = "SELECT COALESCE(NULL, 'fallback') AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>COALESCE() result</title>
</head>
<body>

    <h2>COALESCE() — Return first non-NULL</h2>
    <p>Query: <code>SELECT COALESCE(NULL, 'fallback') AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>