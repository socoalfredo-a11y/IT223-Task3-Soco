<?php
    include 'db.php';
    $sql = "SELECT CONCAT('Start', SPACE(5), 'End') AS spaced";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>SPACE() result</title>
</head>
<body>

    <h2>SPACE() — Generate spaces</h2>
    <p>Query: <code>SELECT CONCAT('Start', SPACE(5), 'End') AS spaced</code></p>
    <p>Result: <?php echo $row && isset($row['spaced']) ? htmlspecialchars($row['spaced']) : '(error)'; ?></p>

</body>
</html>