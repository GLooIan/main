<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: project_disc.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Project Description</title>
    <link rel="stylesheet" href="project_dis.css">
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
        <h1>Project Description</h1>
        <p><strong>General Overview:</strong></p>
        <p>
            The Coastal Environment Awareness with 2D Mapping project is designed to raise awareness about the importance of coastal ecosystems and the environmental challenges they face. 
            By leveraging interactive 2D mapping technology, our platform provides real time insights into various ecological and environmental aspects of coastal regions.
        </p>
        </div>
        
        <div class="dashboard-card"> <p><strong>Purpose & Problem Statement:</strong></p>
        <p>
            Coastal environments play a crucial role in maintaining biodiversity, protecting shorelines, and supporting local economies. However, they are increasingly at risk due to pollution, 
            climate change, and unsustainable human activities. Many communities lack accessible and comprehensive tools to visualize these changes, making it difficult to implement 
            conservation efforts effectively. Our project addresses this gap by offering an easy-to-use platform that visually represents real-time environmental data.
        </p> 
        </div>

        <div class="dashboard-card">
        <p><strong>How the Application Solves This Problem:</strong></p>
        <p>
            Our interactive mapping system collects and displays data on key environmental factors such as water quality, erosion levels, biodiversity, and human activity. 
            Users including students, researchers, and policymakerscan analyze this data to understand changes over time and make informed decisions to support conservation efforts. 
            The goal is not only to provide information but also to encourage action by making scientific data more accessible to the general public.
        </p>
        </div>

        <div class="dashboard-card">
        <p><strong>Proposed Users:</strong></p>
       
         <p>  Environmental Researchers: Use data insights to monitor and analyze coastal changes. <br>
           Students & Educators: Learn about marine ecosystems through an interactive and engaging platform. <br>
           Community Members: Stay informed and participate in sustainability efforts. <br> </p>
     

        <p><strong>Key Features of the Application:</strong></p>
        <p>
            Interactive 2D Coastal Maps:  Users can zoom in on specific regions and explore real-time data. <br>
            User-Friendly Interface:  Designed for both experts and casual users to easily navigate and interpret data. <br>
            Educational Resources:   Provides learning materials to help users understand environmental issues. <br>
            Community Engagement Tools:  Allows users to report changes they observe in their local coastal areas. <br></p>
            </div>
            <div class="dashboard-card">
        <p><strong>Conclusion:</strong></p>
        <p>
            By combining technology and environmental awareness, this project aims to bridge the gap between scientific data and public understanding. 
            Our hope is that through this platform, users will not only gain knowledge but also take action to protect and preserve coastal ecosystems 
            for future generations. Whether you’re a researcher looking for in-depth data analysis or a student wanting to learn about marine life, 
            our interactive mapping system serves as a valuable tool for everyone.

            </div>
        </p>
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