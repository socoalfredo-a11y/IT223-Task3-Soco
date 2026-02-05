<?php
    include 'db.php';
    $sql = "SELECT COS(0) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>COS() result</title>
</head>
<body>

    <h2>COS() — Cosine</h2>
    <p>Query: <code>SELECT COS(0) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>