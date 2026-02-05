<?php
    include 'db.php';
    $sql = "SELECT DATE_ADD('2025-01-01', INTERVAL 5 DAY) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>DATE_ADD() result</title>
</head>
<body>

    <h2>DATE_ADD() — Add interval</h2>
    <p>Query: <code>SELECT DATE_ADD('2025-01-01', INTERVAL 5 DAY) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>