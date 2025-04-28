<?php
// admin_panel.php
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    

    <!-- Google Charts Loader -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawComboChart);

      

</head>
<body>

<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="?page=dashboard" class="<?= $page == 'dashboard' ? 'active' : '' ?>">🏠 Dashboard</a>
    <a href="?page=members" class="<?= $page == 'members' ? 'active' : '' ?>">👤 Manage Members</a>
    <a href="?page=equipment" class="<?= $page == 'equipment' ? 'active' : '' ?>">🏀 Manage Equipment</a>
    <a href="?page=announcements" class="<?= $page == 'announcements' ? 'active' : '' ?>">📢 Announcements</a>
    <a href="?page=reports" class="<?= $page == 'reports' ? 'active' : '' ?>">📊 Reports</a>
    <a href="?page=settings" class="<?= $page == 'settings' ? 'active' : '' ?>">⚙️ Settings</a>
</div>


</body>
</html>
