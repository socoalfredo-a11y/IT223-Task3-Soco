<?php
    include 'db.php';
    $sql = "SELECT ASCII('A') AS ascii_val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>    
    <title>ASCII() result</title>
</head>
<body>

    <h2>ASCII() — ASCII value</h2>
    <p>Query: <code>SELECT ASCII('A') AS ascii_val</code></p>
    <p>Result: <?php echo $row && isset($row['ascii_val']) ? htmlspecialchars($row['ascii_val']) : '(error)'; ?></p>

</body>
</html>