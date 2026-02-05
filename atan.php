<?php
    include 'db.php';
    $sql = "SELECT ATAN(1) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>ATAN() result</title>
</head>
<body>

    <h2>ATAN() — Arc tangent</h2>
    <p>Query: <code>SELECT ATAN(1) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body> 
</html>