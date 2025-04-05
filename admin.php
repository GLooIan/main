<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="adminn.css">
</head>
<body>
<nav>
<div class="nav-title">Coastal Environment Awareness with 2D Mapping</div>
    <div class="nav-links">
        <a href="admin.php">Admin Page</a>
        <a href="project_disc.php">Project Description</a>
        <a href="members.php">Members</a>
        <a href="logout.php">Logout</a>
    </div>
</nav>

<div class="dashboard-container">
    <div class="dashboard-card">
        <h1>Admin Dashboard</h1>
        <p><strong>Project Title:</strong> Coastal Environment Awareness with 2D Mapping</p>
        <p><strong>General Information:</strong> 
            Our project focuses on raising awareness about coastal environments through the use of interactive 2D mapping technology. Coastal regions are vital ecosystems that support marine life, protect shorelines, and contribute to local economies. However, many of these areas are under threat due to pollution, climate change, and human activity.
        </p>
        <p>
            This initiative aims to provide an accessible and informative platform where users can explore detailed coastal maps, track environmental changes over time, and understand the impact of various factors on marine ecosystems. By visualizing real-time data, users including students, researchers, and policymakers—can make informed decisions to support conservation efforts.
        </p>
        <p>
            Our 2D mapping system will include data on water quality, biodiversity, erosion levels, and human activities affecting coastal areas. The goal is to promote environmental responsibility by educating communities on sustainable practices and encouraging active participation in coastal preservation. Through this interactive tool, we hope to inspire action and create a lasting impact on marine conservation.
        </p>
    </div>
</div>


<div class="dashboard-container">
    <div class="dashboard-card">
        <h1>2D Mapping</h1>
        <img src="images/coastal.PNG" alt="Coastal Map">
    </div>
</div>

</body>
</html>
<script>
    history.replaceState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>
