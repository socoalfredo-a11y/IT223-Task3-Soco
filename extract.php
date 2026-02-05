<?php
    include 'db.php';
    $sql = "SELECT EXTRACT(YEAR FROM NOW()) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>EXTRACT() result</title>
</head>
<body>

    <h2>EXTRACT() — Extract date part</h2>
    <p>Query: <code>SELECT EXTRACT(YEAR FROM NOW()) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>