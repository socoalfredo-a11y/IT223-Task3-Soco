<?php
    include 'db.php';
    $sql = "SELECT IFNULL(NULL, 'default') AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>IFNULL() result</title>
</head>
<body>

    <h2>IFNULL() — Replace NULL with value</h2>
    <p>Query: <code>SELECT IFNULL(NULL, 'default') AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>