<?php
    include 'db.php';
    $sql = "SELECT DAYOFMONTH(NOW()) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>DAYOFMONTH() result</title>
</head>
<body>

    <h2>DAYOFMONTH() — Day of month</h2>
    <p>Query: <code>SELECT DAYOFMONTH(NOW()) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>