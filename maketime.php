<?php
    include 'db.php';
    $sql = "SELECT MAKETIME(12,30,0) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>MAKETIME() result</title>
</head>
<body>

    <h2>MAKETIME() — Create time</h2>
    <p>Query: <code>SELECT MAKETIME(12,30,0) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>