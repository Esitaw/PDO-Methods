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

	// $customerIdToDelete = 1; // Change this to the ID of the customer you want to delete



     // 5. SHOW CODE DEMONSTRATING INSERTION OF RECORD TO YOUR DATABASE
     // Define the customer data you want to insert
     // $customerData = [
        // 'customer_id' => 6, 
        // 'first_name' => 'Ayaka',
        // 'last_name' => 'Kamisato',
        // 'email' => 'ayaka.kamisato69@gmail.com',
        // 'phone' => '443-5823',
        // 'address' => '303 Teyvat Inazuma'
     // ];

     // $stmt = $conn->prepare("INSERT INTO Customers (customer_id, first_name, last_name, email, phone, address) 
                         	// VALUES (:customer_id, :first_name, :last_name, :email, :phone, :address)");

     // $stmt->bindParam(':customer_id', $customerData['customer_id'], PDO::PARAM_INT);
     // $stmt->bindParam(':first_name', $customerData['first_name'], PDO::PARAM_STR);
     // $stmt->bindParam(':last_name', $customerData['last_name'], PDO::PARAM_STR);
     // $stmt->bindParam(':email', $customerData['email'], PDO::PARAM_STR);
     // $stmt->bindParam(':phone', $customerData['phone'], PDO::PARAM_STR);
     // $stmt->bindParam(':address', $customerData['address'], PDO::PARAM_STR);

     // Execute the statement and check for success
     // if ($stmt->execute()) {
   	   // echo "New customer has been added successfully.";
     // } else {
           // echo "Failed to add the customer.";
     // }



    // 6. SHOW CODE DEMONSTRATING DELETION OF RECORD TO YOUR DATABASE
    // try {
    // Prepare the SQL DELETE statement
    // $stmt = $conn->prepare("DELETE FROM Customers WHERE customer_id = :customer_id");
    
    // $stmt->bindParam(':customer_id', $customerIdToDelete, PDO::PARAM_INT);
    
    //if ($stmt->execute()) {
        // echo "Customer with ID $customerIdToDelete has been deleted successfully.";
    // } else {
        // echo "Failed to delete the customer.";
    // }
    // } catch (PDOException $e) {
        // echo "Error: " . $e->getMessage();



    // 7. SHOW CODE DEMONSTRATING UPDATING OF RECORD FROM YOUR DATABASE
    // $customerIdToUpdate = 6; 
    // $newData = [
        // 'first_name' => 'Ayaka',
        // 'last_name' => 'Kamisato',
        // 'email' => 'ayaka.kamisato69@gmail.com',
        // 'phone' => '349-1254',
        // 'address' => '669 Teyvat Sumeru'
    // ];

    // Prepare the SQL UPDATE statement
    // $stmt = $conn->prepare("UPDATE Customers 
                       // SET first_name = :first_name, 
                       // last_name = :last_name, 
                       // email = :email, 
                       // phone = :phone, 
                       // address = :address 
                       // WHERE customer_id = :customer_id");

    // $stmt->bindParam(':customer_id', $customerIdToUpdate, PDO::PARAM_INT);
    // $stmt->bindParam(':first_name', $newData['first_name'], PDO::PARAM_STR);
    // $stmt->bindParam(':last_name', $newData['last_name'], PDO::PARAM_STR);
    // $stmt->bindParam(':email', $newData['email'], PDO::PARAM_STR);
    // $stmt->bindParam(':phone', $newData['phone'], PDO::PARAM_STR);
    // $stmt->bindParam(':address', $newData['address'], PDO::PARAM_STR);

    // if ($stmt->execute()) {
         // echo "Customer with ID $customerIdToUpdate has been updated successfully.";
    // } else {
        // echo "Failed to update the customer.";
    // }

    ?> 

</body>
</html>
 