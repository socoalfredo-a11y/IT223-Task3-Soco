<?php
    include 'db.php';
    $sql = "SELECT DAYNAME(NOW()) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>DAYNAME() result</title>
</head>
<body>

    <h2>DAYNAME() — Name of weekday</h2>
    <p>Query: <code>SELECT DAYNAME(NOW()) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>