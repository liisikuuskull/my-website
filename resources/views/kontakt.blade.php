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
                <a class="nav-link" href="kontakt">Meie kontaktid</a>
            </li>
            
        </ul>
    </div>
</nav>

@yield('content')

<ul>
  <li>Aadress:Komandandi 6, Kuressaare</li>
  <li>Email: <a href="mailto:info@example.com">studiofemme.ee@gmail.com</a></li>
  <li>Telefon: <a href="tel:+1234567890">(+372) 5353 5833</a></li>

  <a href="https://www.facebook.com/studiofemme.ee"><img src="https://cdn3.iconfinder.com/data/icons/capsocial-round/500/facebook-512.png" alt="Facebook" style="width: 25px; height: 25px;"></a>
  <a href="https://www.instagram.com/studiofemme.ee/"><img src="https://cdn3.iconfinder.com/data/icons/picons-social/57/78-instagram-512.png" alt="Instagram" style="width: 25px; height: 25px;"></a>

</ul>

<p>Lihtsaim viis on siseneda Komandandi tänavalt. Sildid trepikojas juhatavad teisele korrusele. Klaasuksest sisse ja esimene uks paremale.</p>

<div style="position: absolute; bottom: 0; width: 100%;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2099.247227531236!2d22.48302491612345!3d58.254234081295714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46f26d1d60effacd%3A0x32ccd5763c47e544!2sKomandandi%206%2C%20Kuressaare%2C%2093812%20Saare%20maakond!5e0!3m2!1sen!2see!4v1675848208753!5m2!1sen!2see" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
  </div>


