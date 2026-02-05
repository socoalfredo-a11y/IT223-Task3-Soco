<?php
    include 'db.php';
    $sql = "SELECT LTRIM(CONCAT('   ', first_name)) AS trimmed, first_name FROM employees";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>LTRIM() result</title>
</head>
<body>

<h2>LTRIM() — Leading spaces removed</h2>
<p>Query: <code>SELECT LTRIM(CONCAT('   ', first_name)) AS trimmed, first_name FROM employees</code></p>
<ul>
<?php if ($result && $result->num_rows) { while ($r = $result->fetch_assoc()) { echo '<li>Original: "' . htmlspecialchars($r['first_name']) . '" — LTRIM: ' . htmlspecialchars($r['trimmed']) . '</li>'; } } else { echo '<li>(no rows)</li>'; } ?>
</ul>

</body>
</html>