<?php
    include 'db.php';
    $sql = "SELECT LOG(10) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html> 
<html>   
<head>
    <title>LOG() result</title>
</head>
<body>

    <h2>LOG() — Logarithm</h2>
    <p>Query: <code>SELECT LOG(10) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>