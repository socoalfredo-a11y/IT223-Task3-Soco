<?php
    include 'db.php';
    $sql = "SELECT DATE(NOW()) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>DATE() result</title>
</head>
<body>

    <h2>DATE() — Extract date</h2>
    <p>Query: <code>SELECT DATE(NOW()) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>