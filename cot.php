<?php
    include 'db.php';
    $sql = "SELECT COT(1) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>COT() result</title>
</head>
<body>

    <h2>COT() — Cotangent</h2>
    <p>Query: <code>SELECT COT(1) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>