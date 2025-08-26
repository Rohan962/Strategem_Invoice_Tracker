<?php

header("Content-Type: application/json");
include '../connection.php';



// GET: Fetch or Delete
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['delete'])) {
        $id = (int)$_GET['delete'];
        $stmt = $conn->prepare("DELETE FROM customer_tbl WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    $result = $conn->query("SELECT * FROM customer_tbl ORDER BY cust_id DESC");
    $customers = [];
    while ($row = $result->fetch_assoc()) {
        $customers[] = $row;
    }
    echo json_encode($customers);
    exit;
}

// POST: Insert or Update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id    = $_POST['id'] ?? '';
    $name  = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    if ($id) {
        // Update customer
        $stmt = $conn->prepare("UPDATE customer_tbl SET name=?, email=? WHERE id=?");
        $stmt->bind_param("ssi", $name, $email, $id);
        $stmt->execute();
        $stmt->close();
    } else {
        // Insert new customer
        $stmt = $conn->prepare("INSERT INTO customer_tbl (name, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $email);
        $stmt->execute();
        $stmt->close();
    }

    // Return updated list
    $result = $conn->query("SELECT * FROM customer_tbl ORDER BY id DESC");
    $customers = [];
    while ($row = $result->fetch_assoc()) {
        $customers[] = $row;
    }
    echo json_encode($customers);
    exit;
}
?>
