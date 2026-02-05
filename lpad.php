<?php
    include 'db.php';
    $sql = "SELECT LPAD(first_name,10,'*') AS padded, first_name FROM employees";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>LPAD() result</title>
</head>
<body>

    <h2>LPAD() — Left padded names</h2>
    <p>Query: <code>SELECT LPAD(first_name,10,'*') AS padded, first_name FROM employees</code></p>
    <ul>
    <?php if ($result && $result->num_rows) { while ($r = $result->fetch_assoc()) { echo '<li>' . htmlspecialchars($r['first_name']) . ' — ' . htmlspecialchars($r['padded']) . '</li>'; } } else { echo '<li>(no rows)</li>'; } ?>
    </ul>

</body>
</html>