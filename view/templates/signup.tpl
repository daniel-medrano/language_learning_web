<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba1.2</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/panda.png">
    <link rel="stylesheet" href="css/signinup.css" type="text/css">
</head>
<body>
    <form action="index.php" method="post">
        <div class="signup-box">
            <input type="hidden" name="action" value="signup_submission">
            <h2 class="title">SIGN UP</h2>
            <div class="input-box">
                <label>Name</label>
                <input class="text-box" type="text" name="name" placeholder="name">
            </div>
            <div class="input-box">
                <label>Last name</label>
                <input class="text-box" type="text" name="last_name" placeholder="Last Name">
            </div>
            <div class="input-box">
               <label>Username</label> 
                <input class="text-box" type="text" name="username" placeholder="Username">  
            </div>
           <div class="input-box">
               <label>Password</label>
               <input class="text-box" type="password" name="password" placeholder="Password">
            </div>
            
            <input class="button" type="submit" value="Submit">
            
            <a href="index.php?action=show_home">Return</a>
        </div>
    </form>
    
</body>
</html>