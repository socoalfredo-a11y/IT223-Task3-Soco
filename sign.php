<?php
    include 'db.php';
    $sql = "SELECT SIGN(-5) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>SIGN() result</title>
</head>
<body>

    <h2>SIGN() — Sign of number</h2>
    <p>Query: <code>SELECT SIGN(-5) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>
