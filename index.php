<!-- Example PHP! -->
<?php 

if(isset($_POST['MainForm'])){
    
    header('location: pages/Admin-dashboard.php');
    
}
if(isset($_POST['Admin'])){
    header('location: pages-Admin/LGU_Dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CARE | Login </title>
    <link rel="shortcut icon" href="img/faviconlogo.jpg" />
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    
</head>

<body>
    <section>
        <div class="overlay">
            <!--login-->
            <div class="container">
                <div class="wrapper">
                    <div class="title">Login Form</div>
                    <form action="index.php" method="POST">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <label for="uname"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" required>
                        </div>
                        <div class="row">
                            <i class="fas fa-lock"></i>
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" id="password" required>

                         
                           <span>
                           
                                <i class="fas fa-eye-slash"  id="eye" onclick="toggle()"></i>
                               
                           </span>
                        </div> 
                        <!--remember me-->
                        <label class="checkbox">
                            <input type="checkbox" value="lsRememberMe" id="remember_me"> Remember me
                        </label>
                        <!--Login button-->
                        <div class="row button">
                        <input type="submit" name="MainForm" value="Main Form" onclick="lsRememberMe()">
                        <input type="submit" name="Admin" value="Administrator" onclick="lsRememberMe()">

                        </div>
                        <!-- <div class="fp"><a href="forgotpassword.html">Forgot password?</a></div> -->

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--eye toggle-->
    <script>
        var state = false;

        function toggle() {
            if (state) {
                document.getElementById(
                    "password").
                setAttribute("type", "password");
                document.getElementById("eye").style.color = '#828b82';
                state = false;
            } else {
                document.getElementById(
                    "password").
                setAttribute("type", "text");
                document.getElementById("eye").style.color = '#2FA734';
                state = true;
            }
        }

        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye / eye slash icon
            this.classList.toggle('fas fa-eye');
        });
    </script>
</body>

</html>