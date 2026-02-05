<?php
    include 'db.php';
    $sql = "SELECT INSTR('Hello','e') AS pos";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>INSTR() result</title>
</head>
<body>

    <h2>INSTR() — Position of first occurrence</h2>
    <p>Query: <code>SELECT INSTR('Hello','e') AS pos</code></p>
    <p>Result: <?php echo $row && isset($row['pos']) ? htmlspecialchars($row['pos']) : '(error)'; ?></p>

</body>
</html>