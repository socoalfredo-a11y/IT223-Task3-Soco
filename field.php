<?php
    include 'db.php';
    $sql = "SELECT FIELD('Smith', 'Johnson','Smith','Davis') AS pos";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>FIELD() result</title>
</head>
<body>

    <h2>FIELD() — Index in list</h2>
    <p>Query: <code>SELECT FIELD('Smith', 'Johnson','Smith','Davis') AS pos</code></p>
    <p>Result: <?php echo $row && isset($row['pos']) ? htmlspecialchars($row['pos']) : '(error)'; ?></p>

</body>
</html>