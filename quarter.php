<?php
    include 'db.php';
    $sql = "SELECT QUARTER(NOW()) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>QUARTER() result</title>
</head>
<body>

    <h2>QUARTER() — Quarter</h2>
    <p>Query: <code>SELECT QUARTER(NOW()) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>