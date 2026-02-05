<?php
    include 'db.php';
    $sql = "SELECT UCASE(first_name) AS name FROM employees";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>UCASE() result</title>
</head>
<body>

    <h2>UCASE() — First Names Uppercase</h2>
    <p>Query: <code>SELECT UCASE(first_name) AS name FROM employees</code></p>
    <ul>
    <?php if ($result && $result->num_rows) { while ($r = $result->fetch_assoc()) { echo '<li>' . htmlspecialchars($r['name']) . '</li>'; } } else { echo '<li>(no rows)</li>'; } ?>
    </ul>

</body>
</html>