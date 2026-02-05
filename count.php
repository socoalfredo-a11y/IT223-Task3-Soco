<?php
    include 'db.php';
    $sql = "SELECT COUNT(*) AS total_employees FROM employees";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>COUNT() result</title>
</head>
<body>

    <h2>COUNT() — Total Employees</h2>
    <p>Query: <code>SELECT COUNT(*) AS total_employees FROM employees</code></p>
    <p>Result: <?php echo $row && isset($row['total_employees']) ? htmlspecialchars($row['total_employees']) : '(error or no data)'; ?></p>

</body>
</html>