<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        /* adjust navbar height and padding */
        .navbar {
            height: 60px;
            padding-top: 10px;
            padding-bottom: 10px;
            background-image: linear-gradient(to right top, #dbabb0, #d4a6ae, #cda0ac, #c59ba9, #bd96a7, #b692a4, #ae8da2, #a7899f, #9e849c, #967f98, #8d7b94, #847690);
        }
        /* adjust logo size */
        .navbar img {
            height: 40px;
            width: auto;
        }
    </style>

    <title>Studio Femme</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
           
            <li class="nav-item">
                <a class="nav-link" href="trennid">Trennid</a>
            </li>
            
        </ul>
    </div>
</nav>

@yield('content')