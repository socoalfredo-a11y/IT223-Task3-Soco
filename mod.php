<?php
    include 'db.php';
    $sql = "SELECT MOD(7,3) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>MOD() result</title>
</head>
<body>

    <h2>MOD() — Remainder</h2>
    <p>Query: <code>SELECT MOD(7,3) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>