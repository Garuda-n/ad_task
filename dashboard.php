<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dasboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?php
    session_start();
    include ('includes/sidebar.php');
    

    if (!isset($_SESSION['login'])) {
    // User is not logged in, redirect to login page
    echo "<script>
        alert('Please log in first.');
        window.location.href = 'index.php';
    </script>";
    exit();
    }
    ?>
    <!-- <?php
    session_start();
    echo "<h2>Your Profile Value: " . htmlspecialchars($_SESSION['profile']) . "</h2>";
    ?> -->

    <div class="main-content">
        <div class="header">
        <h1>Welcome, <?php echo isset($_SESSION['login']) ? ucfirst(htmlspecialchars($_SESSION['login'])) : 'Guest'; ?></h1>
        <div class="user">
            <i class="fas fa-user" style= "padding-right: 15px; font-size: 23px"></i>
            <span style= "font-size: 18px"><?php echo isset($_SESSION['login']) ? ucfirst(htmlspecialchars($_SESSION['login'])) : 'Guest'; ?></span>
            </div>
        </div>
        <div class="cards">
            <div class="card">
                <h3>Your tasks</h3>
                <p>Ongoing tasks: 15</p>
            </div>
            <div class="card">
                <h3>Completed task</h3>
                <p>Completed tasks: 95</p>
            </div>
            <div class="card">
                <h3>Incompleted task</h3>
                <p>Pending tasks: 24</p>
            </div>
        </div>
</body>
</html>