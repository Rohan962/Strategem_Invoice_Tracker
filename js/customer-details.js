const apiUrl = "./api/customers.php";

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
        <td>${c.id}</td>
        <td>${c.name}</td>
        <td>${c.email}</td>
        <td>
          <button onclick="editCustomer(${c.id}, '${c.name}', '${c.email}')">Edit</button>
          <button onclick="deleteCustomer(${c.id})">Delete</button>
        </td>
      </tr>
    `;
  });
}

// Add / Update customer
// document.getElementById("customerForm").addEventListener("submit", function(e) {
//   e.preventDefault();
//   const id = document.getElementById("customerId").value;
//   const name = document.getElementById("name").value;
//   const email = document.getElementById("email").value;

//   const formData = new FormData();
//   formData.append("id", id);
//   formData.append("name", name);
//   formData.append("email", email);

//   fetch(apiUrl, { method: "POST", body: formData })
//     .then(res => res.json())
//     .then(data => {
//       renderTable(data);
//       this.reset();
//     });
// });

// // Edit customer
// function editCustomer(id, name, email) {
//   document.getElementById("customerId").value = id;
//   document.getElementById("name").value = name;
//   document.getElementById("email").value = email;
// }

// // Delete customer
// function deleteCustomer(id) {
//   fetch(apiUrl + "?delete=" + id)
//     .then(res => res.json())
//     .then(data => renderTable(data));
// }