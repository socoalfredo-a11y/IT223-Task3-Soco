<?php
    include 'db.php';
    $sql = "SELECT FORMAT(12345.678,2) AS formatted";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>FORMAT() result</title>
</head>
<body>

    <h2>FORMAT() — Number formatting</h2>
    <p>Query: <code>SELECT FORMAT(12345.678,2) AS formatted</code></p>
    <p>Result: <?php echo $row && isset($row['formatted']) ? htmlspecialchars($row['formatted']) : '(error)'; ?></p>

</body>
</html>