<head>
    <title> CPSC 471 PROJECT </title>

     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style type="text/css">
        .brand{
            background: #296d98 !important;
        }

        .brand-text{
            color: #296d98 !important;
        }

        form{
            max-width: 800px;
            margin: 20px auto;
            padding: 20px

        }
    </style>
</head>

<html>
<?php
    session_start();
    $_SESSION["currentUser"] = NULL; 
    $user = $_SESSION["currentUser"]; 
    echo $user?>
</html>

<body class = "blue lighten-5">
    <nav class = "blue lighten-3 z-depth-0">
        <div class= "container"> 
            <a href="index.php" class="center brand-logo brand-text"> PROJECT 471</a>

            <ul id="nav-mobile" class = "right hide-on-small-and-down"> 
            
                <li> <a href="login.php" class= "btn brand z-depth-0"> Login </a> </li>
            </ul>
        </div>
    </nav>
    