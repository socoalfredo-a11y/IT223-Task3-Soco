<?php
    include 'db.php';
    $sql = "SELECT TIME_FORMAT(NOW(),'%H:%i') AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>TIME_FORMAT() result</title>
</head>
<body>

    <h2>TIME_FORMAT() — Format time</h2>
    <p>Query: <code>SELECT TIME_FORMAT(NOW(),'%H:%i') AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>