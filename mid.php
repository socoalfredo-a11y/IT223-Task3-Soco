<?php
    include 'db.php';
    $sql = "SELECT MID(first_name,2,3) AS midpart, first_name FROM employees";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>MID() result</title>
</head>
<body>

    <h2>MID() — Substring (MID)</h2>
    <p>Query: <code>SELECT MID(first_name,2,3) AS midpart, first_name FROM employees</code></p>
    <ul>
    <?php if ($result && $result->num_rows) { while ($r = $result->fetch_assoc()) { echo '<li>' . htmlspecialchars($r['first_name']) . ' — ' . htmlspecialchars($r['midpart']) . '</li>'; } } else { echo '<li>(no rows)</li>'; } ?>
    </ul>

</body>
</html>