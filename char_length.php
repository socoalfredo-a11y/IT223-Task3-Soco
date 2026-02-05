<?php
    include 'db.php';
    $sql = "SELECT CHAR_LENGTH(CONCAT(first_name, ' ', last_name)) AS name_length, CONCAT(first_name, ' ', last_name) AS full_name FROM employees";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>CHAR_LENGTH() result</title>
</head>
<body>

    <h2>CHAR_LENGTH() — Full name lengths</h2>
    <p>Query: <code>SELECT CHAR_LENGTH(CONCAT(first_name, ' ', last_name)) AS name_length, CONCAT(first_name, ' ', last_name) AS full_name FROM employees</code></p>
    <ul>
    <?php
    if ($result && $result->num_rows > 0) {
        while ($r = $result->fetch_assoc()) {
            echo '<li>' . htmlspecialchars($r['full_name']) . ' — ' . htmlspecialchars($r['name_length']) . '</li>';
        }
    } else {
        echo '<li>(no rows)</li>';
    }
    ?>
    </ul>

</body>
</html>