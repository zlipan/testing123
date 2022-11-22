<?php 
     
     include('seller-login.php')
?>
 
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Oasis</title>
    <link rel="stylesheet" href="style.css">

    <!-- MapBox stuff -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />


</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="navbar_container">
            <a href="index.html" id="navbar_logo">
                <img src="images/LogoByLUCY.png">
                <img src="images/LabelByLUCY.png">

            </a>
            <div class="navbar_toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar_menu">
                <li class="navbar_item">
                    <a href="index.html" class="navbar_links">Home</a>
                </li>
                <li class="navbar_item">
                    <a href="findOasis.html" class="navbar_links">Find Oasis</a>
                </li>
                <li class="navbar_item">
                    <a href="newOasis.php" class="navbar_links">New Oasis</a>
                </li>
                <li class="navbar_item">
                    <a href="mission.html" class="navbar_links">Our Mission</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="signupLoginForms">

        <div class="signupForm">
            <h1>Sign Up</h1>
            <!-- Form has no action !!-->
            <form action = "newOasis.php" method = "post">
                <div>
                    <label for="username">Username: </label>
                    <input type="text" id="username" name="username" placeholder="username" required>
                </div>
                <br>
                <div>
                    <label for="password">Password: </label>
                    <input type="password" id="password" name="password" placeholder="password" required>
                </div>
                <br>
                <div>
                    <button type="submit" value="Sign Up"  >
                </div>
            </form>
        </div>
        <hr style="background-color:#383737">
        <div class="loginForm">
            <h1>Login</h1>
            <form action = "seller.html" method = "post">
                <div>
                    <label for="username">Username: </label>
                    <input type="text" id="username" name="username" placeholder="username" required>
                </div>
                <br>
                <div>
                    <label for="password">Password: </label>
                    <input type="password" id="password" name="password" placeholder="password" required>
                </div>
                <br>
                <div>
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>

    </div>

    <script src="app.js"></script>
</body>
