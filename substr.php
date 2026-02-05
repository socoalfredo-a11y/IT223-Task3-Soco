<?php
include 'db.php';
$sql = "SELECT SUBSTR(first_name,2,3) AS substrpart, first_name FROM employees";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>SUBSTR() result</title>
</head>
<body>

    <h2>SUBSTR() — Substring (SUBSTR)</h2>
    <p>Query: <code>SELECT SUBSTR(first_name,2,3) AS substrpart, first_name FROM employees</code></p>
    <ul>
    <?php if ($result && $result->num_rows) { while ($r = $result->fetch_assoc()) { echo '<li>' . htmlspecialchars($r['first_name']) . ' — ' . htmlspecialchars($r['substrpart']) . '</li>'; } } else { echo '<li>(no rows)</li>'; } ?>
    </ul>

</body>
</html>