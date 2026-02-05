<?php
    include 'db.php';
    $sql = "SELECT CURRENT_DATE() AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
    <head>
<title>CURRENT_DATE() result</title>
</head>
<body>

    <h2>CURRENT_DATE() — Current date</h2>
    <p>Query: <code>SELECT CURRENT_DATE() AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>