<?php
    include 'db.php';
    $sql = "SELECT CURDATE() AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>CURDATE() result</title>
</head>
<body>

    <h2>CURDATE() — Current date</h2>
    <p>Query: <code>SELECT CURDATE() AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>