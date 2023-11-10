<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/style-freedom.css')}}">
   
    <link rel="stylesheet" href="{{asset('assets/css/topbar.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>


    <div class="top-bar two">
        <div class="contact-info">
            <i class="fa fa-phone" style="color: rgb(34, 114, 189);"></i>
            <p style="margin-right: 40px;">+971-65-631-35834-344</p>
          <i class="fa fa-envelope" style="color: rgb(34, 114, 189);"></i><span>Muhammedabdullah5885@gmail.com</span>
        </div>
        <ul class="social-icons">
            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-vk"></i></a></li>
            <!-- Add more social icons as needed -->
        </ul>
    </div>

    <!-- header -->
    <div class="w3l-headers-9">
        <header>
            <div class="wrapper">
                <div class="header">

                    <div>
                        <h1>
                            <a href="index.html" class="">
                                <img src="assets/images/logo-logo.png" style="width: 128px; height:76px; margin-left:-115px" alt="Home Service Logo" >
                            </a>
                        </h1>
                    </div>


                    <div class="bottom-menu-content">
                        <input type="checkbox" id="nav" />
                        <label for="nav" class="menu-bar"></label>
                        <nav>

                            <ul class="menu">

                                <!-- Modify the Home link based on the current page -->
                                <li><a style="color: rgb(34, 114, 189); <?php echo ($_SERVER['REQUEST_URI'] == '/') ? 'font-weight: bold;' : ''; ?>" href="/" class="link-nav logo zoom-on-hover <?php echo ($_SERVER['REQUEST_URI'] == '/') ? 'active' : ''; ?>">Home</a></li>

                                <!-- Modify the About link based on the current page -->
                                <li><a style="color: rgb(34, 114, 189); <?php echo ($_SERVER['REQUEST_URI'] == '/about') ? 'font-weight: bold;' : ''; ?>" href="about" class="link-nav logo zoom-on-hover <?php echo ($_SERVER['REQUEST_URI'] == '/about') ? 'active' : ''; ?>">About</a></li>

                                <!-- Modify the Services link based on the current page -->
                                <li><a style="color: rgb(34, 114, 189); <?php echo ($_SERVER['REQUEST_URI'] == '/services') ? 'font-weight: bold;' : ''; ?>" href="services" class="link-nav logo zoom-on-hover <?php echo ($_SERVER['REQUEST_URI'] == '/services') ? 'active' : ''; ?>">Services</a></li>

                                <li>
                                    <label style="color: rgb(34, 114, 189);" for="drop-4" class="toggle logo zoom-on-hover toogle-2">Profile</label>
                                    <a href="#shop" style="color: rgb(34, 114, 189); <?php echo ($_SERVER['REQUEST_URI'] == '/login' || $_SERVER['REQUEST_URI'] == '/signup') ? 'font-weight: bold;' : ''; ?>" class="link-nav logo zoom-on-hover dropdown-toggle <?php echo ($_SERVER['REQUEST_URI'] == '/login' || $_SERVER['REQUEST_URI'] == '/signup') ? 'active' : ''; ?>">Profile <span class="fa fa-caret-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-4" />
                                    <ul>
                                        <li><a style="color: rgb(34, 114, 189); <?php echo ($_SERVER['REQUEST_URI'] == '/login') ? 'font-weight: bold;' : ''; ?>" href="login " class="logo zoom-on-hover">Login</a></li>
                                        <li><a style="color: rgb(34, 114, 189); <?php echo ($_SERVER['REQUEST_URI'] == '/signup') ? 'font-weight: bold;' : ''; ?>" href="signup" class="logo zoom-on-hover">Signup</a></li>
                                    </ul>
                                </li>

                                <!-- Modify the Contact link based on the current page -->
                                <li><a style="color: rgb(34, 114, 189); <?php echo ($_SERVER['REQUEST_URI'] == '/contact') ? 'font-weight: bold;' : ''; ?>" href="contact" class="link-nav logo zoom-on-hover <?php echo ($_SERVER['REQUEST_URI'] == '/contact') ? 'active' : ''; ?>">Contact</a></li>


                            </ul>


                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- //header -->
    </div>