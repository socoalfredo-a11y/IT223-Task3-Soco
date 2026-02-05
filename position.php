<?php
    include 'db.php';
    $sql = "SELECT POSITION('e' IN 'Hello') AS pos";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>POSITION() result</title>
</head>
<body>

    <h2>POSITION() — Position of substring</h2>
    <p>Query: <code>SELECT POSITION('e' IN 'Hello') AS pos</code></p>
    <p>Result: <?php echo $row && isset($row['pos']) ? htmlspecialchars($row['pos']) : '(error)'; ?></p>

</body>
</html>