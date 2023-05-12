@extends('layouts.main')

@section('content')

<style>
  body {
    font-family: 'Open Sans', sans-serif;
    background-color: #e0e0e0;
    
  }
  
  

  

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <div style="text-align: center; margin-top: 30px;">
    <ul>
      <li><img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-location-512.png" alt="Address" style="width: 25px; height: 25px; margin-right: 10px;">Aadress: Komandandi 6, Kuressaare</li>
      <li><img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-email-512.png" alt="Email" style="width: 25px; height: 25px; margin-right: 10px;">Email: <a href="mailto:info@example.com">studiofemme.ee@gmail.com</a></li>
      <li><img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-telephone-512.png" alt="Phone" style="width: 25px; height: 25px; margin-right: 10px;">Telefon: <a href="tel:+1234567890">(+372) 5353 5833</a></li>
      <a href="https://www.facebook.com/studiofemme.ee" target="_blank"><img src="https://cdn3.iconfinder.com/data/icons/capsocial-round/500/facebook-512.png" alt="Facebook" style="width: 25px; height: 25px; filter: grayscale(100%); margin-right: 20px; margin-top: 20px; margin-bottom: 20px;"></a>
      <a href="https://www.instagram.com/studiofemme.ee/" target="_blank"><img src="https://cdn3.iconfinder.com/data/icons/picons-social/57/78-instagram-512.png?v=1" alt="Instagram" style="width: 25px; height: 25px; filter: grayscale(100%); margin-top: 20px; margin-bottom: 20px;"></a>

    <p>Lihtsaim viis on siseneda Komandandi tänavalt. <br> Sildid trepikojas juhatavad teisele korrusele. Klaasuksest sisse ja esimene uks paremale.</p>
  </div>

  <div style="text-align: center; margin-top: 30px;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2099.2472279566587!2d22.482638677195713!3d58.254234074111636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46f26d1d60effacd%3A0x32ccd5763c47e544!2sKomandandi%206%2C%20Kuressaare%2C%2093812%20Saare%20maakond!5e0!3m2!1sen!2see!4v1682688834553!5m2!1sen!2see" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

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

    /* Make Facebook and Instagram icons gray */
    img[src$='facebook-512.png'] {
      filter: grayscale(100%);
    }
    img[src*='instagram.com'] {
    filter: grayscale(100%);
    }
    
  </style>
@endsection
