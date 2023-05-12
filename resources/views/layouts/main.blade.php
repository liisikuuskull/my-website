<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio Femme</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
   
   <style>
       
        .navbar {
            height: 60px;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: #FBFBFA ;
        }

        .navbar img {
            height: 40px;
            width: auto;
        }

        .navbar-nav .nav-link {
            color: #000 !important;
            
            
            
        }

        .nav-link:hover {
            color: #fbc1ac !important;
        }

        body {
            background-image: img src="{{ asset('images/background.jpg') }}" alt="background";
            /*background-color: #e0e0e0;*/
            background-position: center 90px;
            margin: 0;
            font-family: 'Open Sans', sans-serif;
        }

        .menu-btn-icon {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 20px;
            height: 15px;
            cursor: pointer;
            color: #CDA69D;
        }

        .menu-btn-icon span {
            display: block;
            width: 100%;
            height: 3px;
            background-color: #fbc1ac;
        }

        .menu-open {
            display: block;
        }

        .menu-closed {
            display: none;
        }


        @media only screen and (max-width: 768px) {
            .left {
                width: 50%;
            }

            .middle {
                width: 50%;
            }

            
        
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler menu-btn" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-btn-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>

    <div class="" id="navbarNav">
        <ul class="navbar-nav">

        <a href="/home"> <!-- Replace '/' with the URL of your homepage -->
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>

            <li class="nav-item">
                <a class="nav-link" href="trennid">Trennid</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="stuudio">Stuudio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="peopaketid">Peopaketid</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="tooted">Tooted</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hinnakiri">Hinnakiri</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="https://app.hopitude.com/et/calendar?cl=1460" target="_blank">Tunniplaan <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="galerii">Galerii</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="kontakt">Kontakt</a>
            </li>
            
        </ul>
    </div>
</nav>
<main>
@yield('content')
</main>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        // Get references to the menu button and menu container
        var menuButton = $('.menu-btn');
        var menuContainer = $('.navbar-nav');

        // Add a click event listener to the menu button
        menuButton.on('click', function() {
            // Toggle the 'menu-open' class on the menu container
            menuContainer.toggleClass('menu-open');
        });
    });
</script>








