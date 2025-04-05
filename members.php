<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Group Members</title>
    <link rel="stylesheet" href="memberss.css">
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
    <h1>Group Members</h1>
<div class="members-container">

<div class="member-card">
    <img src="images/ian.png" alt="Ian">
    <p><strong>Name:</strong> Ian Moral Q.</p>
    <p><strong>Address:</strong> Limay, WaWa</p>
    <p><strong>Hobbies:</strong> Playing video games, guitar, reading, and sports.</p>
    <p><strong>Project Role</strong> <br> Backend/Frontend Developer</p>
    <p><strong>Role Description:</strong> Responsible for developing both the server-side (backend) and client-side (frontend) of the project. Works on database management, API development, and user interface implementation to ensure smooth system functionality.</p>
</div>

<div class="member-card">
    <img src="images/la.jpg" alt="Leonard">
    <p><strong>Name:</strong> Leonard Angelo Zabala</p>
    <p><strong>Address:</strong> 670 Austria Street, Central, Balanga City, Bataan</p>
    <p><strong>Hobbies:</strong> Playing PC games, anime, and food trips.</p>
    <p><strong>Project Role</strong> <br> Project Manager/Documentator</p>
    <p><strong>Role Description:</strong> Oversees project progress, ensures tasks are completed on time, and manages team coordination. Responsible for documentation, keeping records of project requirements, and maintaining technical reports.</p>
</div>

<div class="member-card">
    <img src="images/Zac.jpg" alt="Zac">
    <p><strong>Name:</strong> Zac Naethan G. Masocol</p>
    <p><strong>Address:</strong> Pilar, Bataan</p>
    <p><strong>Hobbies:</strong> Nature trips, cycling, gaming, and collecting shoes.</p>
    <p><strong>Project Role</strong> <br> UI/UX Designer & Documenter</p>
    <p><strong>Role Description:</strong> Designs the user interface and enhances user experience. Creates wireframes, prototypes, and ensures the application is visually appealing and easy to navigate. Also contributes to project documentation.</p>
</div>
</div>
</body>
</html>
<script>
    // Prevent going back after logout
    history.replaceState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>