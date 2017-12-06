<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Epico</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>

    <div class="main-container">

        <div class="side-bar">

            <div class="logo">
                <img src="assets/img/logo_epico_purple.png" alt="Epico Logo">
            </div>

            <div class="avatar">
                <img src="assets/img/avatar-male.jpeg" alt="avatar img">
                <p class="avatar-name">Steffen Rasmussen</p>
            </div>

            <div class="close-menu">
                <span class="fa fa-close"></span>
            </div>

            <ul class="main-ul">
                <div class="menu-highlight"></div>
                <li class="main-li active">
                    <a href="#">
                        <span class="menu-element">Dashboard</span>
                        <span class="menu-arrow fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="main-li"><a href="#"><span class="menu-element">Browse Jobs</span>
                <span class="menu-arrow fa fa-angle-right"></span></a></li>
                <li class="main-li"><a href="#"><span class="menu-element">News</span>
                <span class="menu-arrow fa fa-angle-right"></span</a></li>
                <li class="main-li"><a href="#"><span class="menu-element">Account</span>
                <span class="menu-arrow fa fa-angle-right"></span></a></li>
            </ul>

           
            
            <div class="logout">
                
                <div class="logout-btn">
                    <form action="../logout.php"> <input type="submit" value="Logout"/></form>
                    </div>
            </div>
            
        </div>

              <div class="mobile-header">
                        <div class="notification-btn">
                            <div class="fa fa-bell"></div>        
                        </div>
                        <div class="logo">
                            <img src="assets/img/logo_epico_purple.png" alt="Epico Logo">
                        </div>
                        <div class="mobile-menu">
                            <span class="fa fa-bars"></span>
                        </div>
                    </div>
        
            <div class="container">
                                  
                <div class="row">
                    <div class="main col-sm-10">
                    <div class="header col-sm-12">
                        <h1 class="h1 col-sm-10">Dashboard</h1>
                        <div class="side-header col-sm-2">
                            <div class="contact-btn">Contact</div>
                            <div class="notification-btn">
                                <div class="fa fa-bell"></div>        
                            </div>
                        </div>
                    </div>