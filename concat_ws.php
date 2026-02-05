<?php
    include 'db.php';
    $sql = "SELECT CONCAT_WS('-', first_name, last_name) AS joined FROM employees";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>CONCAT_WS() result</title>
</head>
<body>

    <h2>CONCAT_WS() — Concatenate with separator</h2>
    <p>Query: <code>SELECT CONCAT_WS('-', first_name, last_name) AS joined FROM employees</code></p>
    <ul>
    <?php
    if ($result && $result->num_rows) {
        while ($r = $result->fetch_assoc()) {
            echo '<li>' . htmlspecialchars($r['joined']) . '</li>';
        }
    } else { echo '<li>(no rows)</li>'; }
    ?>
    </ul>
    
</body>
</html>