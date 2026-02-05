<?php
    include 'db.php';
    $sql = "SELECT CONCAT(first_name, ' ', last_name) AS full_name FROM employees";
    $result = $conn->query($sql);
?>  

<!DOCTYPE html>
<html>
<head>
    <title>CONCAT() result</title>
</head>
<body>
    
    <h2>CONCAT() — Full Names</h2>
    <p>Query: <code>SELECT CONCAT(first_name, ' ', last_name) AS full_name FROM employees</code></p>
    <ul>
        <?php
        if ($result && $result->num_rows > 0) {
            while ($r = $result->fetch_assoc()) {
                echo '<li>' . htmlspecialchars($r['full_name']) . '</li>';
            }
        } else {
            echo '<li>(no rows)</li>';
        }
        ?>
    </ul>

</body>
</html>