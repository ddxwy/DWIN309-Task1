<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My House</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <!-- Logo created by myself using an online logo maker -->
    <img src="images/logo.png" alt="My Logo" title="Personal Logo" width="100" height="100">
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="study.html">My Study Subject</a></li>
            <li><a href="hobbies.html">My Hobbies</a></li>
            <li><a href="music.html">My Music</a></li>
            <li><a href="house.php">My House</a></li>
        </ul>
    </nav>
</header>

<main>
    <aside>
        <h2>News Feed</h2>
        <ul>
            <li>Started my Bachelor of IT at Kent Institute last July 2023.</li>
            <li>Completed Google IT Professional Support Certificate.</li>
            <li>Working on a new web development project.</li>
        </ul>

        <h3>External Links</h3>
        <ul>
            <li>
                
                <a href="https://youtu.be/tbnzAVRZ9Xc?si=sz5InfL1LKknrPwm" target="_blank">
                    Best Motivational Speech
                </a>
            </li>
            <li>
                <a href="https://www.history.com/articles/invention-of-the-internet" target="_blank">
                    The invention of the internet
                </a>
            </li>
            <li>
                <!-- Source: https://www.pokemon.com/ -->
                <a href="https://www.pokemon.com/us" target="_blank" title="Pokemon">
                    <img src="images/pokemon.png" alt="Pokemon" title="Pokemon" width="24" height="24">
                    Pokemon
                </a>
            </li>
            <li>
                <!-- Source: https://en.wikipedia.org/static/images/project-logos/enwiki.png -->
                <a href="https://en.wikipedia.org/wiki/World_war" target="_blank" title="World War">
                    <img src="images/wikipedia.png" alt="World War" title="World War" width="24" height="24">
                    World War
                </a>
            </li>
        </ul>
    </aside>

    <article>
        <h1>My House</h1>
        <p>Welcome to the page about my house! Here, I'll share some details about my living space and what makes it special to me.</p>
        <?php
        $house = [
            "Address" => "25 Harris Street, Cameron Park, NSW 2285", 
            "Type" => "Detached House", 
            "Bedrooms" => 3, 
            "Bathrooms" => 2,
            "Carports" => 2,
        ];
        echo "<h2>House Details</h2>";
        echo "<table class='house-table'>";
        echo "<tr><th>Detail:</th><th>Value:</th></tr>";
        foreach ($house as $key => $value){
            echo "<tr><td><strong>$key</strong></td><td>$value</td></tr>";
        }
        echo "</table>";
        ?>
    </article>
</main>

<footer>
    <p>Email: K230313@student.kent.edu.au | Phone: +61 404 095 887</p>
    <p><a href="https://www.linkedin.com/in/adamsonb/" target="_blank">My LinkedIn Profile</a></p>
    <p>Site created on: 25 August 2025</p>
</footer>

</body>
</html>
