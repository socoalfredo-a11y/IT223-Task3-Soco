<?php
    $sql = "SELECT STRCMP('a','b') AS cmp";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>STRCMP() result</title>
</head>
<body>
    
    <h2>STRCMP() — Compare strings</h2>
    <p>Query: <code>SELECT STRCMP('a','b') AS cmp</code></p>
    <p>Result: <?php echo $row && isset($row['cmp']) ? htmlspecialchars($row['cmp']) : '(error)'; ?></p>

</body>
</html>