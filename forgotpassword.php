

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CARE | Forgot Password </title>
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
                <div class="wrapper1">
                    <div class="title">Forgot Password</div>
                    <form action="index.php" method="POST">
                        <div class="row">

                            <div style="text-align: center;">Lorem ipsum dolor sit amet.</div>
                            <i class="fas fa-user"></i>
                            <label for="uname"><b>Username</b></label>
                            <input type="email" placeholder="Enter Email Address" required>
                        </div>
                       
                    
                        <!--Login button-->
                        <div class="row button ">
                      
                        <input type="submit" name="email" id="email" value="Reset My Password">
                        
                        </div>
                        <div class="SignIn"><i class="fas fa-angle-double-left"><a href="index.php">Sign In</a></i></div>
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