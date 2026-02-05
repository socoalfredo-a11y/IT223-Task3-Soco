<?php
    include 'db.php';
    $sql = "SELECT PERIOD_ADD(202501, 2) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>PERIOD_ADD() result</title>
</head>
<body>
    
    <h2>PERIOD_ADD() — Add period</h2>
    <p>Query: <code>SELECT PERIOD_ADD(202501, 2) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>