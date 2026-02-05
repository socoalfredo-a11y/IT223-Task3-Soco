<?php
    include 'db.php';
    $sql = "SELECT MIN(salary) AS val FROM employees";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>MIN() result</title>
</head>
<body>

    <h2>MIN() — Minimum salary</h2>
    <p>Query: <code>SELECT MIN(salary) AS val FROM employees</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? ('$' . number_format($row['val'],2)) : '(error)'; ?></p>

</body>
</html>