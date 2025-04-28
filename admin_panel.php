<?php
// admin_panel.php
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
        <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #1d4ed8;
            color: white;
            height: 100vh;
            padding: 20px;
        }
        .sidebar h2 {
            font-size: 24px;
            margin-bottom: 30px;
        }
        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            margin: 15px 0;
            font-size: 18px;
        }
        .sidebar a.active {
            font-weight: bold;
            background-color: #2563eb;
            padding: 10px;
            border-radius: 8px;
        }
        .content {
            flex: 1;
            padding: 30px;
            background-color: #f9fafb;
        }
        .card {
            background-color: #e5e7eb;
            padding: 20px;
            margin-bottom: 20px;
            display: inline-block;
            border-radius: 8px;
            margin-right: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #1d4ed8;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #1d4ed8;
            color: white;
        }
        .add-button {
            background-color: #1d4ed8;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            cursor: pointer;
        }
    </style>


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
