<?php
    include 'db.php';
    $sql = "SELECT SYSDATE() AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>SYSDATE() result</title>
</head>
<body>

    <h2>SYSDATE() — System date</h2>
    <p>Query: <code>SELECT SYSDATE() AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>