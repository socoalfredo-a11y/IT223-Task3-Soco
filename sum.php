<?php
    include 'db.php';
    $sql = "SELECT SUM(salary) AS total_salary FROM employees";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>SUM() result</title>
</head>
<body>

    <h2>SUM() — Total Salary Paid</h2>
    <p>Query: <code>SELECT SUM(salary) AS total_salary FROM employees</code></p>
    <p>Result: <?php echo ($row && $row['total_salary'] !== null) ? ('$' . number_format($row['total_salary'], 2)) : '(error or no data)'; ?></p>

</body>
</html>