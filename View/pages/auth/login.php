<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESORT - Login</title>
    <link rel="stylesheet" href="src/css/login.css">
</head>
<body>
    
    <div class="login-box">
        <form method="post" action="index.php?action=checkLogin">
            <h1>CAR Rental</h1>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden='true'></i>
                <input type="text" placeholder='Username' name='uname' value=''>
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden='true'></i>
                <input type="password" placeholder='Password' name='pass' value=''>
            </div>

            <input type="submit" class='btn' name='btn_login' value='Sing In'>
        </form>
    </div>

</body>
</html>