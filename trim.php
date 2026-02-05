<?php
    include 'db.php';
    $sql = "SELECT CONCAT('>' , TRIM(CONCAT('   ', first_name, '   ')), '<') AS trimmed_example, first_name FROM employees";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>TRIM() result</title>
</head>
<body>

    <h2>TRIM() — Trimmed First Names (example)</h2>
    <p>Query: <code>SELECT CONCAT('>' , TRIM(CONCAT('   ', first_name, '   ')), '<') AS trimmed_example, first_name FROM employees</code></p>
    <ul>
    <?php
    if ($result && $result->num_rows > 0) {
        while ($r = $result->fetch_assoc()) {
            echo '<li>Original: "' . htmlspecialchars($r['first_name']) . '" — Trimmed: ' . htmlspecialchars($r['trimmed_example']) . '</li>';
        }
    } else {
        echo '<li>(no rows)</li>';
    }
    ?>
    </ul>

</body>
</html>