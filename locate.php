<?php
    include 'db.php';
    $sql = "SELECT LOCATE('e','Hello') AS pos";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOCATE() result</title>
</head>
<body>

    <h2>LOCATE() — Position of substring</h2>
    <p>Query: <code>SELECT LOCATE('e','Hello') AS pos</code></p>
    <p>Result: <?php echo $row && isset($row['pos']) ? htmlspecialchars($row['pos']) : '(error)'; ?></p>

</body>
</html>