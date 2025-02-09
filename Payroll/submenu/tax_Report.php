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
    <h1>tax report</h1>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eum illo ex nesciunt nihil expedita harum nemo quos mollitia saepe officia omnis adipisci nulla nostrum rerum ipsam, in enim placeat.

    <div>
      <form action="">
        <input type="text">
        <input type="text">
      </form>
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