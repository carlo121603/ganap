<!DOCTYPE html>
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
    .dashboard-table {
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
    <h1>Generate payslip</h1>
    
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