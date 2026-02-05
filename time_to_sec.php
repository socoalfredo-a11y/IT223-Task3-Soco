<?php
    include 'db.php';
    $sql = "SELECT TIME_TO_SEC('01:00:00') AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>TIME_TO_SEC() result</title>
</head>
<body>
    
    <h2>TIME_TO_SEC() — Time to seconds</h2>
    <p>Query: <code>SELECT TIME_TO_SEC('01:00:00') AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>