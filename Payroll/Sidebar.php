<?php
$base_url = "/Payroll/";

?>
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
    
<div class="header">
    <div class="logo">
      <button class="toggle-btn" id="toggle-btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24">
          <path fill="#000000" d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/>
        </svg>
      </button>
      <a href="Homepage.php"><img class="d-sm-none d-md-block" src="<?php echo $base_url; ?>logo/logo.png" alt="Neuralcore Logo"></a>
    </div>
    <div class="user-welcome">Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</div>
  </div>
  
  <!-- SIDEBARS -->
  <div class="sidebar" id="sidebar">
    <p class="green-spacer"></p>

    <a class="mt-1" href="<?php echo $base_url; ?>Dashboard.php">
    <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
    </a>

    <a class="mt-1" href="<?php echo $base_url; ?>Employee Management.php">
        <i class="fas fa-users"></i> <span>Employee Management</span>
    </a>

    <a class="mt-1" href="<?php echo $base_url; ?>Payroll Management.php">
        <i class="fas fa-money-check-alt"></i> <span>Payroll Management</span>
    </a>

    
    <a class="mt-1 menu-item" href="#" id="payrollReports" onclick="toggleSubMenu(event)">
        <i class="fas fa-file-invoice-dollar"></i>
        <span>Payroll Reports</span>
        <i id="toggleIcon" class="fas fa-chevron-right"></i>
    </a>

    <!-- Collapsible Submenu -->
    <div class="mt-1 submenu" id="payrollSubMenu" style="display: none;">
        <a href="<?php echo $base_url; ?>submenu/sss_Report.php" class="submenu-item mt-1">SSS Report</a>
        <a href="<?php echo $base_url; ?>submenu/pag-ibig_Report.php" class="submenu-item mt-1">Pag-IBIG Report</a>
        <a href="<?php echo $base_url; ?>submenu/philhealth_Report.php" class="submenu-item mt-1">PhilHealth Report</a>
        <a href="<?php echo $base_url; ?>submenu/tax_Report.php" class="submenu-item mt-1">Tax Report</a>
        <a href="<?php echo $base_url; ?>submenu/top_Sheet.php" class="submenu-item mt-1">Top Sheet</a>
        <a href="<?php echo $base_url; ?>submenu/journal_Entry.php" class="submenu-item mt-1">Journal Entry</a>
    </div>

    <a class="mt-1" href="<?php echo $base_url; ?>Generate Payslip.php">
        <i class="fas fa-receipt"></i> <span>Generate Payslip</span>
    </a>

    <a class="mt-1" href="#" onclick="confirmLogout()">
    <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
</a>

  </div>

  <script>
    // Function to toggle the visibility of the submenu and change the icon
        function toggleSubMenu(event) {
            event.preventDefault(); // Prevent the default link behavior
            var subMenu = document.getElementById("payrollSubMenu");
            var toggleIcon = document.getElementById("toggleIcon");
            var sidebar = document.getElementById("sidebar");

            // Check if the sidebar is collapsed and expand it
            if (sidebar.classList.contains("collapsed")) {
                sidebar.classList.remove("collapsed");
                document.querySelector(".main-content").classList.remove("collapsed");
            }

            if (subMenu.style.display === "none" || subMenu.style.display === "") {
                subMenu.style.display = "block";
                toggleIcon.classList.remove("fa-chevron-right");
                toggleIcon.classList.add("fa-chevron-down");
                // Store submenu state in localStorage
                localStorage.setItem('submenuState', 'open');
            } else {
                subMenu.style.display = "none";
                toggleIcon.classList.remove("fa-chevron-down");
                toggleIcon.classList.add("fa-chevron-right");
                // Store submenu state in localStorage
                localStorage.setItem('submenuState', 'closed');
            }
        }

        // Function to handle navigation
        function navigate(page) {
            document.querySelectorAll('.sidebar a').forEach(link => {
                link.classList.remove('active');
            });
            
            event.currentTarget.classList.add('active');
            
            fetch(page)
                .then(response => response.text())
                .then(html => {
                    const mainContent = document.getElementById('main-content');
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');
                    const newContent = doc.querySelector('#main-content').innerHTML;
                    mainContent.innerHTML = newContent;
                    window.scrollTo(0, 0);
                    history.pushState({}, '', page);
                })
                .catch(error => console.error('Error loading page:', error));
        }

        // Function to check if current page is a submenu page
        function isSubmenuPage() {
            const submenuPages = [
                'sss_Report.php',
                'pag-ibig_Report.php',
                'philhealth_Report.php',
                'tax_Report.php',
                'top_sheet.php',
                'journal_entry.php'
            ];
            const currentPage = window.location.pathname.split('/').pop();
            return submenuPages.includes(currentPage);
        }

        // Set active state and restore submenu state on page load
        document.addEventListener('DOMContentLoaded', () => {
            const currentPage = window.location.pathname.split('/').pop();
            const currentLink = document.querySelector(`.sidebar a[href*="${currentPage}"]`);
            if (currentLink) {
                currentLink.classList.add('active');
            }

            // Restore submenu state if on a submenu page or if previously opened
            const submenuState = localStorage.getItem('submenuState');
            const subMenu = document.getElementById("payrollSubMenu");
            const toggleIcon = document.getElementById("toggleIcon");

            if (isSubmenuPage() || submenuState === 'open') {
                subMenu.style.display = "block";
                toggleIcon.classList.remove("fa-chevron-right");
                toggleIcon.classList.add("fa-chevron-down");
            }
        });
    </script>


        <!-- ADD THIS IF WE WANT A DELAY AT LOADING -->
    <!-- <script> 
    document.addEventListener("DOMContentLoaded", function () {
        document.body.classList.add("loaded");

        document.querySelectorAll("a").forEach(link => {
            link.addEventListener("click", function (e) {
                if (this.href.startsWith(window.location.origin)) {
                    e.preventDefault();
                    document.body.classList.remove("loaded");
                    setTimeout(() => {
                        window.location.href = this.href;
                    }, 100);
                }
            });
        });
    });
    </script> -->

    <script>
    function confirmLogout() {
    Swal.fire({
        title: "Are you sure?",
        text: "You will be logged out.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Yes, Logout"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "logout.php";
        }
    });
}
</script>


    </body>
</html>