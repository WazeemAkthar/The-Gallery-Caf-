<?php
session_start();
if (!isset($_SESSION['role_id']) || $_SESSION['role_id'] != 2) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/operational-staff.css">
    <title>Operational Staff Dashboard - The Gallery Café</title>
</head>
<body>
    <div id="header"></div> <!-- Placeholder for header -->
    <h1>Welcome, Staff <?php echo $_SESSION['name']; ?></h1>
    
    <main>
        <h2>Operational Staff Dashboard</h2>
        
        <div class="dashboard-container">
            <div class="dashboard-item">
                <h3>Daily Tasks</h3>
                <ul id="daily-tasks-list">
                    <!-- Daily tasks will be inserted here -->
                </ul>
                <button id="add-task-btn">Add Task</button>
            </div>
            <div class="dashboard-item">
                <h3>Reservations</h3>
                <table id="reservations-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Reservations will be inserted here -->
                    </tbody>
                </table>
            </div>
            <div class="dashboard-item">
                <h3>Order Status</h3>
                <ul id="order-status-list">
                    <!-- Order statuses will be inserted here -->
                </ul>
            </div>
        </div>
    </main>
    
    <div id="footer"></div> <!-- Placeholder for footer -->
    
    <script src="../JS/components.js"></script>
    <script src="../JS/scripts.js"></script>
    <script src="../JS/operational-staff.js"></script>
</body>
</html>