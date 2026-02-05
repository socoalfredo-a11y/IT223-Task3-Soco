<?php
    include 'db.php';
    $sql = "SELECT SIN(0) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html><html><head><title>SIN() result</title></head><body>
<html>
<head>
    <title>SIN() result</title>
</head>
<body>

    <h2>SIN() — Sine</h2>
    <p>Query: <code>SELECT SIN(0) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>
