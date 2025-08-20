<?php

include 'connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name    = htmlspecialchars($_POST['company_name']);
    $address   = htmlspecialchars($_POST['address']);
    $phone   = htmlspecialchars($_POST['phone']);
    $email   = htmlspecialchars($_POST['email']);
    $gstin = htmlspecialchars($_POST['gstin']);
    $trn = htmlspecialchars($_POST['trn']);
    $vat = htmlspecialchars($_POST['vat']);
    $country = htmlspecialchars($_POST['country']);

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO customer_tbl 
        (`company_name`, `address`, `email_id`, `phone`, `gstin/uin`, `vat`, `trn`, `country`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("ssssssss", $company_name, $address, $email, $phone, $gstin, $vat, $trn, $country);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<h3>Record saved successfully!</h3>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Customer Form</title>
    <link rel="stylesheet" href="./css/customer-form.css">
</head>
<body>
    <div class="container">
        <h2>Customer Form</h2>
        <form method="post"  action="">
            <div class="customer-form">
                <div class="customer-form-group">

                    <label>Company Name:</label><br>
                    <input type="text" name="company_name" required><br><br>
                    
                    <label>Address:</label><br>
                    <input type="address" name="address" required><br><br>
                    
                    <label>Email:</label><br>
                    <input type="email" name="email" ><br><br>
                    
                    <label>GSTIN/UIN:</label><br>
                    <input type="gstin" name="gstin" ><br><br>
                </div>
                <div class="customer-form-group">

                    <label>TRN:</label><br>
                    <input type="trn" name="trn" ><br><br>
                    <label>Phone:</label><br>
                    <input type="tel" name="phone" ><br><br>
                    
                    <label>VAT:</label><br>
                    <input type="text" name="vat" ><br><br>
                    
                    <label>Country:</label><br>
                    <input type="text" name="country" required></input><br><br>
                </div>
            </div>
            <input class="customer-form-submit-btn" type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
