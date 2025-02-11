<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .red-text {
      color: red;
    }
  </style>
</head>
<body>
  <!-- Modal Structure -->
  <div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addEmployeeModalLabel">Add Employee</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">
          <!-- Tabs Navigation -->
          <ul class="nav nav-tabs mb-3" id="employeeTabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal" type="button" role="tab" aria-controls="personal" aria-selected="true">Personal Information</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="employment-tab" data-bs-toggle="tab" data-bs-target="#employment" type="button" role="tab" aria-controls="employment" aria-selected="false">Employment Details</button>
            </li>
            <!-- <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact Information</button>
            </li> -->
          </ul>
          <!-- Tab content goes here -->

          <div class="tab-content" id="employeeTabsContent">
            <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
              <!-- Personal Information form goes here -->
               <form action="test_submit.php" method="POST">
                <div class="row">
                      <div class="mb-3 col-md-4">
                        <label for="firstName" class="form-label">First Name*</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                      </div>
                      <div class="mb-3 col-md-4">
                        <label for="middleName" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="middleName" name="middleName">
                      </div>
                      <div class="mb-3 col-md-4">
                        <label for="lastName" class="form-label">Last Name*</label>
                        <input type="text" class="form-control" id="lastName"  name="lastName" required>
                      </div>
                  </div>
               </form>

            </div>
            <div class="tab-pane fade" id="employment" role="tabpanel" aria-labelledby="employment-tab">
              <!-- Employment Details form goes here -->
               <form action="">
                <div class="row">
                    <div class="mb-3 col-md-4">
                      <label for="position" class="form-label">Position*</label>
                      <select class="form-select" name="position" id="position" required>
                        <option value="">Select Position</option>
                        <option value="manager">Manager</option>
                        <option value="developer">Developer</option>
                        <option value="designer">Designer</option>
                      </select>
                    </div>
                    <div class="mb-3 col-md-4">
                      <label for="employeeType" class="form-label">Employee Type*</label>
                      <select class="form-select" name="employeeType" id="employeeType" required>
                        <option value="">Select Employee Type</option>
                        <option value="full-time">Regular</option>
                        <option value="part-time">Probationary</option>
                        <option value="contract">Contractual</option>
                        <option value="full-time">Place Worker</option>
                        <option value="part-time">Project-Based</option>
                        <option value="part-time">Seasonal</option>
                      </select>
                    </div>
                    <div class="mb-3 col-md-4">
                      <label for="bankAccount" class="form-label">Bank Account Number*</label>
                      <input type="text" name="bankAccount" class="form-control" id="bankAccount" required>
                    </div>
                  </div>
               </form>


            </div>
            <!-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              Contact Information form goes here
            </div> -->
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save Employee</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Popper.js (Required for Bootstrap 5 functionality) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
