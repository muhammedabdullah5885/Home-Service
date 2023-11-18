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
    <link rel="stylesheet" href="{{asset('assets/css/Watsapp&Phone.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
  
  
    
</head>

<body>

    <a href="/" class="float2" target="_blank">
        <i class="fa fa-phone my-float"></i>
    </a>

      <a href="/" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    
    <!-- header -->
    <div class="w3l-headers-9">
        <header>
            <div class="wrapper">
                <div class="header">

                    <div>
                        <h1>
                            <a href="index.html" class="">
                                <img src="assets/images/logo-logo.jpg" style="width: 90px;" alt="Home Service Logo">
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
                            
                                <li><a style="color: rgb(34, 114, 189); <?php echo ($_SERVER['REQUEST_URI'] == '/services') ? 'font-weight: bold;' : ''; ?>" href="services" class="link-nav logo zoom-on-hover <?php echo ($_SERVER['REQUEST_URI'] == '/services') ? 'active' : ''; ?>">services</a></li>
                                <!-- Modify the Services link based on the current page -->
                                <!-- <li class="dropdown">
                                    <label style="color: rgb(34, 114, 189);" for="drop-3" class="toggle logo zoom-on-hover toogle-2">Services</label>
                                    <a href="services" style="color: rgb(34, 114, 189);" class="link-nav logo zoom-on-hover dropdown-toggle">Services <span class="fa fa-caret-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-3" />
                                    <ul class="dropdown-menu">
                                        <li><a href="Electrical-service" style="color:black;">Electrical</a></li>
                                        <li><a href="Painting-service" style="color:black;">Painting</a></li>
                                        <li><a href="Carpentry-service" style="color:black;">Carpentry</a></li>
                                        <li><a href="WaterTankCleaning-service" style="color:black;">WaterTankCleaning</a></li>
                                        <li><a href="Officefitout-service" style="color:black;">Office Fit Out</a></li>
                                        <li><a href="PoolMaintenance-service" style="color:black;">Pool Maintenance</a></li>
                                        <li><a href="Renovation-service" style="color:black;">Renovation</a></li>
                                        <li><a href="Plumbing-service" style="color:black;">Plumbing</a></li>
                                    </ul>
                                </li> -->




                                <!-- <li>
                                    <label style="color: rgb(34, 114, 189);" for="drop-4" class="toggle logo zoom-on-hover toogle-2">Profile</label>
                                    <a href="#shop" style="color: rgb(34, 114, 189); <?php echo ($_SERVER['REQUEST_URI'] == '/login' || $_SERVER['REQUEST_URI'] == '/signup') ? 'font-weight: bold;' : ''; ?>" class="link-nav logo zoom-on-hover dropdown-toggle <?php echo ($_SERVER['REQUEST_URI'] == '/login' || $_SERVER['REQUEST_URI'] == '/signup') ? 'active' : ''; ?>">Profile <span class="fa fa-caret-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-4" />
                                    <ul>
                                        <li><a style="color: rgb(34, 114, 189); <?php echo ($_SERVER['REQUEST_URI'] == '/login') ? 'font-weight: bold;' : ''; ?>" href="login " class="logo zoom-on-hover">Login</a></li>
                                        <li><a style="color: rgb(34, 114, 189); <?php echo ($_SERVER['REQUEST_URI'] == '/signup') ? 'font-weight: bold;' : ''; ?>" href="signup" class="logo zoom-on-hover">Signup</a></li>
                                    </ul>
                                </li> -->

                            
                                <li><a style="color: rgb(34, 114, 189); <?php echo ($_SERVER['REQUEST_URI'] == '/contact') ? 'font-weight: bold;' : ''; ?>" href="contact" class="link-nav logo zoom-on-hover <?php echo ($_SERVER['REQUEST_URI'] == '/contact') ? 'active' : ''; ?>">Contact</a></li>

                                <li><a style="color:yellowgreen; <?php echo ($_SERVER['REQUEST_URI'] == '/BookNow') ? 'font-weight: bold;' : ''; ?>" href="BookNow" class="link-nav logo zoom-on-hover <?php echo ($_SERVER['REQUEST_URI'] == '/BookNow') ? 'active' : ''; ?>"><b>Book Service</b></a></li>

                            </ul>


                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- //header -->
    </div>