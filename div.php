<?php
    include 'db.php';
    $sql = "SELECT 7 DIV 3 AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>DIV() result</title>
</head>
<body>

    <h2>DIV — Integer division</h2>
    <p>Query: <code>SELECT 7 DIV 3 AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>