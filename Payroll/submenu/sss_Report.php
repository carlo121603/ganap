<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <title>SSS Report</title>
  <link rel="stylesheet" href="../Style.css">
</head>
<body>
  <?php 
    include '../Sidebar.php';
  ?>
  <div class="main-content" id="main-content">
    <h1>SSS Contribution Report</h1>
    <p>This report provides a summary of Social Security System (SSS) contributions for employees.</p>

    <h2>Employee Contributions</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Employee ID</th>
          <th>Name</th>
          <th>Monthly Salary</th>
          <th>SSS Contribution</th>
          <th>Employer Share</th>
          <th>Total Contribution</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1001</td>
          <td>Juan Dela Cruz</td>
          <td>₱25,000</td>
          <td>₱900</td>
          <td>₱1,000</td>
          <td>₱1,900</td>
        </tr>
        <tr>
          <td>1002</td>
          <td>Maria Santos</td>
          <td>₱30,000</td>
          <td>₱1,080</td>
          <td>₱1,200</td>
          <td>₱2,280</td>
        </tr>
      </tbody>
    </table>

    <h2>Summary of Contributions</h2>
    <p>The following summarizes the total SSS contributions for the selected period:</p>
    <ul>
      <li><strong>Total Employees Covered:</strong> 2</li>
      <li><strong>Total Employee Contributions:</strong> ₱1,980</li>
      <li><strong>Total Employer Contributions:</strong> ₱2,200</li>
      <li><strong>Grand Total:</strong> ₱4,180</li>
    </ul>

    <h2>Payment Schedule</h2>
    <p>SSS contributions must be remitted on or before the following due dates:</p>
    <ul>
      <li><strong>For Employers:</strong> 15th of the following month</li>
      <li><strong>For Voluntary Members:</strong> Last day of the following month</li>
    </ul>

    <h2>Important Notices</h2>
    <ul>
      <li>Late payments may result in penalties and interest.</li>
      <li>Ensure that all employees are properly enrolled in the SSS system.</li>
      <li>For further inquiries, contact SSS customer support.</li>
    </ul>
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