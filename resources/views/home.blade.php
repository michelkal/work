<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Arise Admin Panel">
    <meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Themeforest, Bootstrap">
    <meta name="author" content="Ramji">
    <link rel="shortcut icon" href="img/fav.png">
    <title>Arise Admin Panel, Arise Dashboard</title>
    <link href="css/login.css" rel="stylesheet" media="screen">
    <link href="css/animate.css" rel="stylesheet" media="screen">
    <link href="fonts/icomoon/icomoon.css" rel="stylesheet">
</head>

<body>
    <form action="index.html" id="wrapper">
        <div id="box" class="animated bounceIn">
            <div id="top_header"><img src="img/logo.png" class="logo" alt="Arise Admin Dashboard Logo">
                <h5>Sign in to your account.</h5></div>
                <div id="inputs">
                    <div class="form-block">
                        <input type="text" placeholder="Phone number"> <i class="icon-phone"></i>
                    </div>
                    <div class="form-block">
                        <input type="password" placeholder="Password"> <i class="icon-eye4"></i>
                    </div>
                    <br>
                    <div class="form-block">
                        {!! Recaptcha::render() !!}
                    </div>
                    <br>
                    <input type="submit" value="Sign In">
                </div>
            </div>
        </form>
    </body>

    </html>