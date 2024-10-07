<?php require_once '/Users/saman/OneDrive/Documents/WEBSITE/PDO Methods/core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers Table fetchAll and fetch with pre</title>
</head>
<body>
    
    <?php

    // 3. SHOW CODE DEMONSTRATING FETCH_ALL(). USE PRINT_R(). WITH “<pre>” TAG IN BETWEEN. 
    // $stmt = $conn->prepare("SELECT * FROM customers");

    // Execute the query
    // if ($stmt->execute()) {

        // $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // echo "<pre>";
        // print_r($results);
        // echo "</pre>";
    // } else {
        // echo "Query execution failed.";
    // } 


    // 4. SHOW CODE DEMONSTRATING HOW FETCH() IS USED. USE PRINT_R(). WITH “<pre>” TAG IN BETWEEN. 
    // $stmt = $conn->prepare("SELECT * FROM orders LIMIT 1"); // Fetching only one record

    // Execute the query
    // if ($stmt->execute()) {
        
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";
    // } else {
        // echo "Query execution failed.";
    // }
    ?>

</body>
</html>
 