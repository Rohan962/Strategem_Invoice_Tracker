<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/customer-details.js"></script>
    <title>Customer Details</title>
</head>
<body> -->
    <h1>This is Customer details page</h1>

    <!-- Customer Table -->
    <table border="1" width="100%" id="customersTable">
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Actions</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <script>
        const apiUrl = "/api/customers.php";

        // Load customers on page load
        fetch(apiUrl)
        .then(res => res.json())
        .then(data => renderTable(data));

        function renderTable(customers) {
        const tbody = document.querySelector("#customersTable tbody");
        tbody.innerHTML = "";
        customers.forEach(c => {
            tbody.innerHTML += `
            <tr>
                <td>${c.cust_id}</td>
                <td>${c.company_name}</td>
                <td>${c.address}</td>
                <td>
                <button onclick="editCustomer(${c.cust_id}, '${c.company_name}', '${c.address}')">Edit</button>
                <button onclick="deleteCustomer(${c.cust_id})">Delete</button>
                </td>
            </tr>
            `;
        });
        }
    </script>

    

<!-- </body>
</html> -->