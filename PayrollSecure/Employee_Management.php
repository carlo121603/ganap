<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payroll</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="Style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<!-- DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

  <style>
        .filters .btn {
            background-color: #f4f4f4;
            border: solid #000 1px;
            transition: background-color 0.4s ease; /* Smooth transition */
        }

        .filters .btn:hover {
            background-color: lightgray;
            border: solid #000 1px;
        }
        .employee-table{
            margin-top:30px;
        }
        .table.table-striped {
            font-size:16px;
        }
    </style>
</head>
  <body>
    <?php 
      include 'Sidebar.php';
    ?>
      <div class="main-content" id="main-content">
      <!-- Action Buttons -->
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="m-0">Employee Masterlist</h1>
            <div class="d-flex gap-2">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">
                    <i class="fas fa-user-plus"></i> Add Employee
                </button>
                <button class="btn btn-success"><i class="fas fa-upload"></i> Upload Masterlist</button>
                <button class="btn btn-purple"><i class="fas fa-download"></i> Download Masterlist</button>
            </div>
       </div>
        <!-- Include Modal Form PHP File -->
        <?php include 'Add Employee.php'; ?>
         <!-- Filter Buttons -->
        <div class="filters">
            <button class="btn">Show All</button>
            <button class="btn">Onboarding</button>
            <button class="btn">Offboarding</button>
        </div>

        <!-- Employee Table -->
        <div class="employee-table">
            <table id="employeeTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>Employee Number</th>
                        <th>Full Name</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Date of Hire</th>
                        <th>Manager</th>
                        <th>Department</th>
                        <th>Status</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Data -->
                    <tr>
                        <td>001</td>
                        <td>John Doe</td>
                        <td>Software Engineer</td>
                        <td>johndoe@example.com</td>
                        <td>+123456789</td>
                        <td>2022-01-15</td>
                        <td>Jane Smith</td>
                        <td>IT</td>
                        <td>Active</td>
                        <td><i class="fas fa-file-alt"></i></td>
                        <td><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS (Ensure that Bootstrap JS and jQuery are loaded) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize the DataTable
        $('#employeeTable').DataTable();
    });
</script>
  </body>
</html>