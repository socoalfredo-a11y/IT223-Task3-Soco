<?php
    include 'db.php';
    $sql = "SELECT MAKEDATE(2025, 100) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>MAKEDATE() result</title>
</head>
<body>

    <h2>MAKEDATE() — Create date</h2>
    <p>Query: <code>SELECT MAKEDATE(2025, 100) AS val</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>

</body>
</html>