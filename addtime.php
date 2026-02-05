<?php
    include 'db.php';
    $sql = "SELECT ADDTIME('10:00:00','02:00:00') AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html> 
<html>
<head>
    <title>ADDTIME() result</title>
</head>
<body>

    <h2>ADDTIME() — Add time</h2>
    <p>Query: <code>SELECT ADDTIME('10:00:00','02:00:00') AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>