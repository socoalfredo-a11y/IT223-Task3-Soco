<?php
    include 'db.php';
    $sql = "SELECT GREATEST(1,5,3) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>GREATEST() result</title>
</head>
<body>

    <h2>GREATEST() — Largest value</h2>
    <p>Query: <code>SELECT GREATEST(1,5,3) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>