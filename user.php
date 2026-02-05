<?php
    include 'db.php';
    $sql = "SELECT USER() AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>USER() result</title>
</head>
<body>

    <h2>USER() — Current user</h2>
    <p>Query: <code>SELECT USER() AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>