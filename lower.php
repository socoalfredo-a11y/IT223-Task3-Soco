<?php
    include 'db.php';
    $sql = "SELECT LOWER(first_name) AS name FROM employees";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOWER() result</title>
</head>
<body>

    <h2>LOWER() — First Names Lowercase</h2>
    <p>Query: <code>SELECT LOWER(first_name) AS name FROM employees</code></p>
    <ul>
    <?php
    if ($result && $result->num_rows > 0) {
        while ($r = $result->fetch_assoc()) {
            echo '<li>' . htmlspecialchars($r['name']) . '</li>';
        }
    } else {
        echo '<li>(no rows)</li>';
    }
    ?>
    </ul>
    
</body>
</html>