<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <title>SSS Report</title>
  <link rel="stylesheet" href="../Style.css">
  <style>
    /* miain content problem  when collapsing sidebar */
    /* .main-content {
      padding-top: 120px;
      margin-left: 200px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      width: 50%;
      margin: auto;
    } */

    h1 {
      color: #007bff;
      font-size: 2rem;
      margin-bottom: 20px;
    }

    .summary-card {
      background: #f4f4f4;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
      margin-top: 20px;
    }

    .summary-card h2 {
      font-size: 1.5rem;
      color: #333;
    }

    .summary-card p {
      font-size: 1.1rem;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border: 1px solid #ddd;
    }

    th {
      background-color: #007bff;
      color: white;
    }

    .btn-generate {
      background-color: #28a745;
      color: white;
      width: 100%;
      border-radius: 5px;
      padding: 10px;
      font-size: 16px;
      margin-top: 20px;
      cursor: pointer;
    }

    .btn-generate:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>
  <?php
    include '../Sidebar.php';
  ?>

  <div class="main-content" id="main-content">
    <h1>PhilHealth Report</h1>
    
    <div class="summary-card">
      <h2>PhilHealth Contribution Summary</h2>
      <p><strong>Total Employees:</strong> 150</p>
      <p><strong>Total Contribution Collected:</strong> ₱45,000</p>
      <p><strong>Pending Contributions:</strong> ₱5,000</p>
    </div>

    <h3>Employee Contributions</h3>
    <table>
      <tr>
        <th>ID</th>
        <th>Employee Name</th>
        <th>Monthly Contribution</th>
        <th>Status</th>
      </tr>
      <tr>
        <td>#001</td>
        <td>John Doe</td>
        <td>₱300</td>
        <td>Paid</td>
      </tr>
      <tr>
        <td>#002</td>
        <td>Jane Smith</td>
        <td>₱300</td>
        <td>Pending</td>
      </tr>
      <tr>
        <td>#003</td>
        <td>Mark Wilson</td>
        <td>₱300</td>
        <td>Paid</td>
      </tr>
    </table>

    <button class="btn-generate">Generate Report</button>
  </div>

  <script>
    document.getElementById('toggle-btn').addEventListener('click', function() {
      const sidebar = document.getElementById('sidebar');
      const mainContent = document.getElementById('main-content');
      sidebar.classList.toggle('collapsed');
      mainContent.classList.toggle('collapsed');
    });
  </script>
</body>
</html>