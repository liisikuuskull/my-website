@extends('layouts.main')

@section('content')
  <style>
    body {
      background-color: #e0e0e0;
      font-family: 'Open Sans', sans-serif;
    }

    ul li a {
      color: #fbc1ac;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .contact-info {
      margin-left: 35px;
      margin-top: 30px;
    }

    .social {
      width: 5px; 
      height: 5px; 
      margin-left: 35px; 
      margin-top: 45px; 
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      font-size: 30px;
      filter: grayscale(100%); /* Make Facebook and Instagram icons gray */
      color: #fddfd5 !important;
    
    }

    .social a {
      margin-right: 10px; /* space between */
    }

    .container {
      margin-left: 35px;
      margin-top: 50px;
      background-color: #fddfd5 !important;
      width: 35%;
      border-radius: 10px;

    }

    .map-container {
      margin-left: 25px;
      margin-top: 40px;
      max-width: 100%;
    }

    .map-container iframe {
      width: 100%;
      height: 400px;
    }

    @media only screen and (max-width: 768px) {
      .contact-info,
      .map-container {
        margin-left: 10px!important;
        max-width: 100%;
      }

      .map-container iframe {
        height: 200px;
        max-width: 100%;
      }

      .container {
        width: 60%;
      }

    }
  </style>

<body>

<div class="contact-info">
    <ul>
      <li><img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-location-512.png" alt="Address" style="width: 25px; height: 25px; margin-right: 10px;">Aadress: Komandandi 6, Kuressaare</li>
      <li><img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-email-512.png" alt="Email" style="width: 25px; height: 25px; margin-right: 10px;">Email: <a href="mailto:info@example.com">studiofemme.ee@gmail.com</a></li>
      <li><img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-telephone-512.png" alt="Phone" style="width: 25px; height: 25px; margin-right: 10px;">Telefon: <a href="tel:+1234567890">(+372) 5353 5833</a></li>
    </ul>
</div>
<div class="social">
      <a href="https://www.facebook.com/studiofemme.ee" target="_blank"><ion-icon name="logo-facebook">"Facebook"</ion-icon></a>
      <a href="https://www.instagram.com/studiofemme.ee/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
</div>


<div class="container">
  <p>Lihtsaim viis on siseneda Komandandi tänavalt. <br> Sildid trepikojas juhatavad teisele korrusele.<br> Klaasuksest sisse ja esimene uks paremale.</p>
</div>

  <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2099.2472279566587!2d22.482638677195713!3d58.254234074111636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46f26d1d60effacd%3A0x32ccd5763c47e544!2sKomandandi%206%2C%20Kuressaare%2C%2093812%20Saare%20maakond!5e0!3m2!1sen!2see!4v1682688834553!5m2!1sen!2see" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>


  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
@endsection


