<?php
    include 'db.php';
    $sql = "SELECT CONNECTION_ID() AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>CONNECTION_ID() result</title>
</head>
<body>

    <h2>CONNECTION_ID() — Current connection id</h2>
    <p>Query: <code>SELECT CONNECTION_ID() AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>