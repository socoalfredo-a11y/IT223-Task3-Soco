<?php
    include 'db.php';
    $sql = "SELECT FROM_DAYS(738885) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>FROM_DAYS() result</title>
</head>
<body>

    <h2>FROM_DAYS() — Date from days</h2>
    <p>Query: <code>SELECT FROM_DAYS(738885) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>