<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
!<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <title>Payroll</title>
  <link rel="stylesheet" href="Style.css">
  <style>
    .dashboard-widgets {
        display: flex;
        gap: 20px;
        margin-top: 20px;
    }
    .widget {
        background: #f4f4f4;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        width: 200px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    }
    .payroll-table {
        margin-top: 30px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }
    th {
        background: #007bff;
        color: white;
    }
</style>
</head>
<body>
  <?php 
    include 'Sidebar.php';
  ?>
  <div class="main-content" id="main-content">
      <h1>Payroll Management</h1>

      <div class="dashboard-widgets">
          <div class="widget">
              <h2>Total Employees</h2>
              <p>150</p>
          </div>
          <div class="widget">
              <h2>Monthly Payroll</h2>
              <p>$120,000</p>
          </div>
          <div class="widget">
              <h2>Pending Salaries</h2>
              <p>$5,000</p>
          </div>
          <div class="widget">
              <h2>Last Payroll Date</h2>
              <p>Feb 5, 2025</p>
          </div>
      </div>

      <div class="payroll-table">
          <h2>Recent Salary Disbursements</h2>
          <table>
              <tr>
                  <th>ID</th>
                  <th>Employee Name</th>
                  <th>Department</th>
                  <th>Salary</th>
                  <th>Status</th>
              </tr>
              <tr>
                  <td>#001</td>
                  <td>John Doe</td>
                  <td>IT</td>
                  <td>$3,500</td>
                  <td>Paid</td>
              </tr>
              <tr>
                  <td>#002</td>
                  <td>Jane Smith</td>
                  <td>HR</td>
                  <td>$2,800</td>
                  <td>Pending</td>
              </tr>
              <tr>
                  <td>#003</td>
                  <td>Mark Wilson</td>
                  <td>Finance</td>
                  <td>$4,200</td>
                  <td>Paid</td>
              </tr>
          </table>
      </div>
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

</body>
</html>