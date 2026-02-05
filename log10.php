<?php
    include 'db.php';
    $sql = "SELECT LOG10(100) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOG10() result</title>
</head>
<body>

    <h2>LOG10() — Log base 10</h2>
    <p>Query: <code>SELECT LOG10(100) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>