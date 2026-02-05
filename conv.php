<?php
    include 'db.php';
    $sql = "SELECT CONV('A', 16, 10) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>CONV() result</title>
</head>
<body>

    <h2>CONV() — Convert numbers between bases</h2>
    <p>Query: <code>SELECT CONV('A', 16, 10) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>