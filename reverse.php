<?php
    include 'db.php';
    $sql = "SELECT REVERSE('abc') AS rev";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>REVERSE() result</title>
</head>
<body>

    <h2>REVERSE() — Reverse string</h2>
    <p>Query: <code>SELECT REVERSE('abc') AS rev</code></p>
    <p>Result: <?php echo $row && isset($row['rev']) ? htmlspecialchars($row['rev']) : '(error)'; ?></p>

</body>
</html>