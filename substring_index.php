<?php
    include 'db.php';
    $sql = "SELECT SUBSTRING_INDEX(CONCAT(first_name, ' ', last_name), ' ', 1) AS first FROM employees";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>SUBSTRING_INDEX() result</title>
</head>
<body>

    <h2>SUBSTRING_INDEX() — Substring before delimiter</h2>
    <p>Query: <code>SELECT SUBSTRING_INDEX(CONCAT(first_name, ' ', last_name), ' ', 1) AS first FROM employees</code></p>
    <ul>
    <?php if ($result && $result->num_rows) { while ($r = $result->fetch_assoc()) { echo '<li>' . htmlspecialchars($r['first']) . '</li>'; } } else { echo '<li>(no rows)</li>'; } ?>
    </ul>

</body>
</html>