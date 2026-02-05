<?php
    include 'db.php';
    $sql = "SELECT CHARACTER_LENGTH(first_name) AS len, first_name FROM employees";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>CHARACTER_LENGTH() result</title>
</head>
<body>
    
    <h2>CHARACTER_LENGTH() — First name lengths</h2>
    <p>Query: <code>SELECT CHARACTER_LENGTH(first_name) AS len, first_name FROM employees</code></p>
    <ul>
    <?php
    if ($result && $result->num_rows > 0) {
        while ($r = $result->fetch_assoc()) {
            echo '<li>' . htmlspecialchars($r['first_name']) . ' — ' . htmlspecialchars($r['len']) . '</li>';
        }
    } else {
        echo '<li>(no rows)</li>';
    }
    ?>
    </ul>

</body>
</html>