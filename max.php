<?php
    include 'db.php';
    $sql = "SELECT MAX(salary) AS val FROM employees";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>MAX() result</title>
</head>
<body>

    <h2>MAX() — Maximum salary</h2>
    <p>Query: <code>SELECT MAX(salary) AS val FROM employees</code></p>
    <p>Result: <?php echo $row && isset($row['val']) ? ('$' . number_format($row['val'],2)) : '(error)'; ?></p>

</body>
</html>