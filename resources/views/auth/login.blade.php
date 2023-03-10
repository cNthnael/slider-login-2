<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1a437d56cd.js" crossorigin="anonymous"></script>
    <title>Hi There!</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

</head>
<body>

<!-- back design -->

<div id="yellowround"></div>
<div id="redtri"></div>

<!-- Creat account part -->

<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="#">
            <h1 id="ca">Create Free Account</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registration</span>

            <div>
                <p><input id="txt" type="text" placeholder="Name" ><i id= "lock" class="far fa-user"></i>
                    <input id="txt" type="email" placeholder="Email"><i id="lock" class="far fa-envelope"></i>
                    <input id="txt" type="password" placeholder="Password"><i id="lock" class="far fa-eye"></i></p>
            </div>

            <!-- terms and condition -->

            <div class="tacbox">
                <input id="checkbox" type="checkbox" />
                <label  for="checkbox"><text id="tac"> I agree to these </text><a href="#">Terms and Conditions</a>.</label>
            </div>
            <button>Sign Up</button>
        </form>

    </div>

    <!-- Sign in cointaner -->

    <div class="form-container sign-in-container">
        <form action="#">
            <h1 id="signin">Sign In</h1>
            <div class="social-container">
                <a href="https://www.facebook.com/"  target="_blank" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span><br>
            <p><input id="txt" type="email" placeholder="Email"><i id="lock" class="far fa-envelope"></i>
                <input id="txt" type="password" placeholder="Password"><i id="lock" class="far fa-eye"></i></p>
            <a id="fp"href="#">Forgot your password?</a>
            <button>Sign In</button>
        </form>
    </div>

    <!-- overlay type -->

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us <br>please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend !</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });



</script>
</body>
</html>
