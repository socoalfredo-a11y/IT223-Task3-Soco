<?php
    include 'db.php';
    $sql = "SELECT ROUND(4.567,2) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>ROUND() result</title>
</head>
<body>

    <h2>ROUND() — Round number</h2>
    <p>Query: <code>SELECT ROUND(4.567,2) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>