<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ReMedAI</title>   
</head>
   
<body>  
    <section class="login">
        <div class="login_box">
            <header>
                <h1 > ReMedAI </h1>
            </header>
            <h2 style="color:BLACK" >User Login</h2>
            <form class="login_form" action="login_process.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" placeholder="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" placeholder="password" required><br>
        <button type="Login" value="Login" name='login'> Login</button>
            </form>
            <div class="links">
                <p><a href="user_reg.php">Register Now!</a></p>
            </div>
           
        </div>
    </section>
    
       
</body>
</html>