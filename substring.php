<?php
    include 'db.php';
    $sql = "SELECT first_name, SUBSTRING(first_name, 1, 3) AS prefix FROM employees";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>SUBSTRING() result</title>
</head>
<body>

    <h2>SUBSTRING() — First name prefixes</h2>
    <p>Query: <code>SELECT first_name, SUBSTRING(first_name, 1, 3) AS prefix FROM employees</code></p>
    <ul>
    <?php
    if ($result && $result->num_rows > 0) {
        while ($r = $result->fetch_assoc()) {
            echo '<li>' . htmlspecialchars($r['first_name']) . ' — ' . htmlspecialchars($r['prefix']) . '</li>';
        }
    } else {
        echo '<li>(no rows)</li>';
    }
    ?>
    </ul>
    
</body>
</html>