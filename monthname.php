<?php
    include 'db.php';
    $sql = "SELECT MONTHNAME(NOW()) AS val";
    $result = $conn->query($sql);
    $row = $result ? $result->fetch_assoc() : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>MONTHNAME() result</title>
</head>
<body>
<h2>MONTHNAME() — Month name</h2>
<p>Query: <code>SELECT MONTHNAME(NOW()) AS val</code></p>
<p>Result: <?php echo $row && isset($row['val']) ? htmlspecialchars($row['val']) : '(error)'; ?></p>
</body></html>