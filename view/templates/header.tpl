<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/panda.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lessons.css">

    <title>Pandas-Login</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="img/panda.png" alt="">
        </div>
        
        <ul>
            {if $isLoggedIn}
                <li><a href="index.php?action=show_lessons">Lessons</a></li> 
            {/if} 
            {if not $isLoggedIn}            
                <li><a href="index.php?action=open_login">Login</a></li>
                <li><a href="index.php?action=open_signup">Sign Up</a></li>
            {/if}
            {if $isLoggedIn}
                <li><a href="logout.php">Log Out</a></li>
            {/if}
        </ul>
    </nav>
