<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AJAX Sidebar Navigation</title>
  <script src="./js/customer-details.js"></script>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
    }
    /* Sidebar */
    .sidenav {
      width: 220px;
      height: 100vh;
      background-color: #2c3e50;
      padding-top: 20px;
      position: fixed;
      left: 0;
      top: 0;
    }
    .sidenav a {
      display: block;
      padding: 12px 20px;
      color: #ecf0f1;
      text-decoration: none;
      transition: 0.3s;
    }
    .sidenav a:hover {
      background-color: #34495e;
    }
    /* Main content */
    .content {
      margin-left: 220px;
      padding: 20px;
      width: 100%;
      min-height: 100vh;
      background: #ecf0f1;
    }
  </style>
</head>
<body>

  <div class="sidenav">
    <a href="customer-form.php" onclick="loadContent(event, 'customer-form.php')">Add Customer</a>
    <a href="customer-details.php" onclick="loadContent(event, 'customer-details.php')">Customer Details</a>
    <!-- <a href="contact.html" onclick="loadContent(event, 'contact.html')">Contact</a> -->
  </div>

  <div class="content" id="mainContent">
    <h2>Welcome</h2>
    <p>Click the links to load content without reloading the page.</p>
  </div>

  <script>
    function loadContent(event, page) {
      event.preventDefault(); // Stop full page reload

      fetch(page) 
        .then(response => {
          if (!response.ok) {
            throw new Error("Page not found: " + page);
          }
          return response.text();
        })
        .then(data => {
          document.getElementById("mainContent").innerHTML = data;
        })
        .catch(error => {
          document.getElementById("mainContent").innerHTML = "<p style='color:red;'>Error loading content.</p>";
          console.error(error);
        });
    }
  </script>

</body>
</html>
