<?php
    include 'db.php';
    $sql = "SELECT RIGHT(first_name,3) AS right3, first_name FROM employees";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>RIGHT() result</title>
</head>
<body>

    <h2>RIGHT() — Right part of string</h2>
    <p>Query: <code>SELECT RIGHT(first_name,3) AS right3, first_name FROM employees</code></p>
    <ul>
    <?php if ($result && $result->num_rows) { while ($r = $result->fetch_assoc()) { echo '<li>' . htmlspecialchars($r['first_name']) . ' — ' . htmlspecialchars($r['right3']) . '</li>'; } } else { echo '<li>(no rows)</li>'; } ?>
    </ul>

</body>
</html>