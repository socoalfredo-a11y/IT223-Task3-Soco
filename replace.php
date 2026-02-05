<?php
    include 'db.php';
    $sql = "SELECT first_name, REPLACE(first_name, 'a', '@') AS replaced FROM employees";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>REPLACE() result</title>
</head>
<body>

    <h2>REPLACE() — Replace characters in first names</h2>
    <p>Query: <code>SELECT first_name, REPLACE(first_name, 'a', '@') AS replaced FROM employees</code></p>
    <ul>
    <?php
    if ($result && $result->num_rows > 0) {
        while ($r = $result->fetch_assoc()) {
            echo '<li>' . htmlspecialchars($r['first_name']) . ' — ' . htmlspecialchars($r['replaced']) . '</li>';
        }
    } else {
        echo '<li>(no rows)</li>';
    }
    ?>
    </ul>
    
</body>
</html>