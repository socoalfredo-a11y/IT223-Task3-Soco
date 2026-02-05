<?php
    include 'db.php';
    $sql = "SELECT ACOS(1) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>ACOS() result</title>
</head>
<body>

    <h2>ACOS() — Arc cosine</h2>
    <p>Query: <code>SELECT ACOS(1) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>