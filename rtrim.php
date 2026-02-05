<?php
    include 'db.php';
    $sql = "SELECT RTRIM(CONCAT(first_name, '   ')) AS trimmed, first_name FROM employees";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>RTRIM() result</title>
</head>
<body>

    <h2>RTRIM() — Trailing spaces removed</h2>
    <p>Query: <code>SELECT RTRIM(CONCAT(first_name, '   ')) AS trimmed, first_name FROM employees</code></p>
    <ul>
    <?php if ($result && $result->num_rows) { while ($r = $result->fetch_assoc()) { echo '<li>Original: "' . htmlspecialchars($r['first_name']) . '" — RTRIM: ' . htmlspecialchars($r['trimmed']) . '</li>'; } } else { echo '<li>(no rows)</li>'; } ?>
    </ul>

</body>
</html>