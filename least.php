<?php
    include 'db.php';
    $sql = "SELECT LEAST(1,5,3) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>LEAST() result</title>
</head>
<body>

    <h2>LEAST() — Smallest value</h2>
    <p>Query: <code>SELECT LEAST(1,5,3) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>