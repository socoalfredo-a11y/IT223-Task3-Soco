<?php
    include 'db.php';
    $sql = "SELECT TIME(NOW()) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>TIME() result</title>
</head>
<body>

    <h2>TIME() — Extract time</h2>
    <p>Query: <code>SELECT TIME(NOW()) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>