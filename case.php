<?php
    include 'db.php';
    $sql = "SELECT CASE WHEN 1=1 THEN 'YES' ELSE 'NO' END AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CASE() result</title>
</head>
<body>
    <h2>CASE — Conditional expression</h2>
    <p>Query: <code>SELECT CASE WHEN 1=1 THEN 'YES' ELSE 'NO' END;</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>
</body>
</html>
