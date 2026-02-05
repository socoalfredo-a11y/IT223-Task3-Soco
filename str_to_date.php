<?php
    include 'db.php';
    $sql = "SELECT STR_TO_DATE('01-01-2025','%d-%m-%Y') AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>STR_TO_DATE() result</title>
</head>
<body>

    <h2>STR_TO_DATE() — String to date</h2>
    <p>Query: <code>SELECT STR_TO_DATE('01-01-2025','%d-%m-%Y') AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>