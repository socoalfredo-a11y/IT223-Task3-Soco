<?php
    include 'db.php';
    $sql = "SELECT REPEAT('A',3) AS rep";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>REPEAT() result</title>
</head>
<body>

    <h2>REPEAT() — Repeat string</h2>
    <p>Query: <code>SELECT REPEAT('A',3) AS rep</code></p>
    <p>Result: <?php echo $row && isset($row['rep']) ? htmlspecialchars($row['rep']) : '(error)'; ?></p>

</body>
</html>