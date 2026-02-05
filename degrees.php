<?php
    include 'db.php';
    $sql = "SELECT DEGREES(PI()) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>DEGREES() result</title>
</head>
<body>

    <h2>DEGREES() — Radians to degrees</h2>
    <p>Query: <code>SELECT DEGREES(PI()) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>