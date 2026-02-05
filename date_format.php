<?php
    include 'db.php';
    $sql = "SELECT DATE_FORMAT(NOW(), '%Y-%m-%d') AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>DATE_FORMAT() result</title>
</head>
<body>

    <h2>DATE_FORMAT() — Formats date</h2>
    <p>Query: <code>SELECT DATE_FORMAT(NOW(), '%Y-%m-%d') AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>