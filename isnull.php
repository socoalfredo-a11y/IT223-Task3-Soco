<?php
    include 'db.php';
    $sql = "SELECT ISNULL(NULL) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>ISNULL() result</title>
</head>
<body>

    <h2>ISNULL() — Check for NULL</h2>
    <p>Query: <code>SELECT ISNULL(NULL) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>