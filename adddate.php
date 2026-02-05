<?php
    include 'db.php';
    $sql = "SELECT ADDDATE('2025-01-01', 10) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>ADDDATE() result</title>
</head>
<body>

    <h2>ADDDATE() — Add days to date</h2>
    <p>Query: <code>SELECT ADDDATE('2025-01-01', 10) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>