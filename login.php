<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width:768px)" href="css/mobile.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="slider.js">
    <title>Esports News</title>
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="bt"></div>
                <button type="button" class="toggle-btn" onclick="login()">Нэв</button>
                <button type="button" class="toggle-btn" onclick="register()">Бүрт</button>
                </div>
                
                <div class="social-icons">
                            <img src="/icon/counter-strike-icon.png">
                            <img src="/icon/dota1.png">
                            <img src="/icon/fortnite.png">
                            <img src="/icon/league-of-legends.png">
                </div>
                <form id="login" class="input-group">
                    <input type="text" class="input-field" placeholder="User ID" required>
                    <input type="text" class="input-field" placeholder="Enter Password">
                    <input type="checkbox" class="check-box"><span>Remember Password</span>
                    <button type="submit" class="submit-btn">Login</button>
                </form>
                <form id="register" class="input-group">
                    <input type="text" class="input-field" placeholder="User ID" required>
                    <input type="email" class="input-field" placeholder="email ID" required>
                    <input type="text" class="input-field" placeholder="Enter Password">
                    <input type="checkbox" class="check-box"><span>I agree the terms & conditions</span>
                    <button type="submit" class="submit-btn">Register</button>
                </form>
        </div>
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("bt");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>
</html>