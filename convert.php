<?php
    include 'db.php';
    $sql = "SELECT CONVERT('A', SIGNED) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CONVERT() result</title>
</head>
<body>
    <h2>CONVERT — Type conversion</h2>
    <p>Query: <code>SELECT CONVERT('A', SIGNED);</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>
</body>
</html>
