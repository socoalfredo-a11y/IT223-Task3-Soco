<?php
    include 'db.php';
    $sql = "SELECT INSERT('Hello',2,3,'X') AS inserted";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>INSERT() result</title>
</head>
<body>

    <h2>INSERT() — Insert substring</h2>
    <p>Query: <code>SELECT INSERT('Hello',2,3,'X') AS inserted</code></p>
    <p>Result: <?php echo $row && isset($row['inserted']) ? htmlspecialchars($row['inserted']) : '(error)'; ?></p>

</body>
</html>