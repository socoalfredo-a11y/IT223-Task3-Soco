<?php
    include 'db.php';
    $sql = "SELECT LOG2(8) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOG2() result</title>
</head>
<body>

    <h2>LOG2() — Log base 2</h2>
    <p>Query: <code>SELECT LOG2(8) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>