<?php
    include 'db.php';
    $sql = "SELECT SEC_TO_TIME(3600) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>SEC_TO_TIME() result</title>
</head>
<body>

    <h2>SEC_TO_TIME() — Seconds to time</h2>
    <p>Query: <code>SELECT SEC_TO_TIME(3600) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>