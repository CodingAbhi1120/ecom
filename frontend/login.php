<?php
require('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css_folder_for_frent/login.css?v=<?=$version?>">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="javascript/index.js"></script>    
</head>
<body>
<div class="container" id="container">
        <div class="form-container sign-up">
            <form id="register-form" method="post">
                <h1>Create Account</h1>
               
                <input type="text" name="name" id="name" placeholder="Name">

                <span class="field_error" id="name_error"></span><br>

                <input type="email" name="email" id="email" placeholder="Email">
                <span class="field_error" id="email_error"></span><br>
                <input type="password" name="password" id="password" placeholder="Password">
                <span class="field_error" id="password_error"></span><br>
            <button type="button" class="btn4" onclick="user_register()">Register</button>
          
            </form>
            <div class="form-output register_msg">
                <p class="form_message field_error"></p>
            </div>
        </div>
        <div class="form-container sign-in">
            <form id="login-form" method="post" >
                <h1>Sign In</h1>
            
                <input type="email" name="login_email" id="login_email" placeholder="Email">
                <span class="field_error" id="login_email_error"></span><br>
                <input type="password" name="login_password" id="login_password" placeholder="Password">
                <span class="field_error" id="login_password_error"></span><br>
                <a href="#">Forget Your Password?</a>
                <button type="button" class="btn4" onclick="user_login()">Login</button>
            </form>
            <div class="form-output login_msg">
                <p class="form_message field_error"></p>
            </div>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                 
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script>const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');
        
        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });
        
        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
        });</script>
</body>
</html>
