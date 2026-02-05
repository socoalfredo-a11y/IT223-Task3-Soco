<?php
    include 'db.php';
    $sql = "SELECT DAYOFYEAR(NOW()) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>DAYOFYEAR() result</title>
</head>
<body>

    <h2>DAYOFYEAR() — Day of year</h2>
    <p>Query: <code>SELECT DAYOFYEAR(NOW()) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>