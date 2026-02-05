<?php
    include 'db.php';
    $sql = "SELECT FIND_IN_SET('b','a,b,c') AS pos";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>FIND_IN_SET() result</title>
</head>
<body>

    <h2>FIND_IN_SET() — Position in comma list</h2>
    <p>Query: <code>SELECT FIND_IN_SET('b','a,b,c') AS pos</code></p>
    <p>Result: <?php echo $row && isset($row['pos']) ? htmlspecialchars($row['pos']) : '(error)'; ?></p>

</body>
</html>