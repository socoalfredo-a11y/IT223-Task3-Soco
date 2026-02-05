<?php
    include 'db.php';
    $sql = "SELECT AVG(salary) AS avg_salary FROM employees";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head> 
    <title>AVG() result</title>
</head>
<body>

    <h2>AVG() — Average Salary</h2>
    <p>Query: <code>SELECT AVG(salary) AS avg_salary FROM employees</code></p>
    <p>Result: <?php echo ($row && $row['avg_salary'] !== null) ? ('$' . number_format($row['avg_salary'], 2)) : '(error or no data)'; ?></p>

</body>
</html>