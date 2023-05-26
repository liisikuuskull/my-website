
@extends('layouts.main')

@section('content')

<div id="container"></div>
  <div style="display:flex; flex-direction:column; align-items:center; margin-top: 20px; background-color: #fddfd5; border-radius: 10px;margin-left: 80px; margin-right: 80px; padding: 5px; width: 70%;">
    <h2 style="text-align:center;">Hinnakiri</h2>
    
    <ul style="list-style:none; padding:0; margin-top:10px;">
      <li style="display:flex; justify-content:space-between; margin-bottom:10px;">
        <span style="flex-grow:1; margin-right: 10px;">Ühekordne külastus</span>
        <span style="margin-left:auto;">15 €</span>
      </li>
      <li style="display:flex; justify-content:space-between; margin-bottom:10px;">
        <span style="flex-grow:1; margin-right: 10px;">Eratreening</span>
        <span style="margin-left:auto;">35 €</span>
      </li>
      <li style="display:flex; justify-content:space-between; margin-bottom:10px;">
        <span style="flex-grow:1; margin-right: 10px;">4x kuukaart</span>
        <span style="margin-left:auto;">45 €</span>
      </li>
      <li style="display:flex; justify-content:space-between; margin-bottom:10px;">
        <span style="flex-grow:1; margin-right: 10px;">8x kuukaart</span>
        <span style="margin-left:auto;">75 €</span>
      </li>
      <li style="display:flex; justify-content:space-between; margin-bottom:40px;">
        <span style="flex-grow:1; margin-right: 10px;">12x kuukaart</span>
        <span style="margin-left:auto;">85 €</span>
      </li>
      <li style="display:flex; justify-content:space-between; margin-bottom:0px;">
        <span style="flex-grow:1; margin-right: 10px;">Saali rent eraüritusele, gruppidele ja stuudio välistele klientidele</span>
        <span style="margin-left:auto;">30 €/ h</span>
      </li>
      <li style="display:flex; justify-content:space-between; margin-bottom:40px;">
        <span style="flex-grow:1; margin-right: 10px;">Saali rent stuudio õpilasele treenimiseks</span>
        <span style="margin-left:auto;">15 €/ h</span>
      </li>
    </ul>
    <p style="text-align:center; margin-top:20px;">*Kõik kuukaardid kehtivad ostu hetkest 31 päeva,<br> mille sisse mahub 5 nädala ulatuses trennipäevi.</p>
    <p style="text-align:center;">*Teenuste eest saab tasuda stuudios kohapeal.</p>
  </div>
</div>

<style>
/*
div {
    border: 1px solid rgb(255, 0, 0);
  }
*/
  body {
    background-color: #e0e0e0;
    font-family: 'Open Sans', sans-serif;
  }
  .image-container1 {
    position: fixed;
    bottom: 60px;
    left: 80px;
    width: 250px;
    transform: rotate(-20deg); 
    border-radius: 10px; 
    overflow: hidden;
  }
  .image-container1 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  

  /* media query for smaller screens */
  @media only screen and (max-width: 760px) {
    .image-container1 {
      display: none; /* hide the image */
    }

    div {
      margin-left: 20px;
      margin-right: 20px;
    }


    /* its not working how i want
    #container {
      z-index: 1;
      
    }
    */
  }
/* image-container 2*/

.image-container2 {
    position: fixed;
    bottom: 350px;
    left: 1100px;
    width: 250px; 
    transform: rotate(20deg);
    border-radius: 10px; 
    overflow: hidden;
  }
  .image-container2 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  /* media query for smaller screens */
  @media only screen and (max-width: 800px) {

    .image-container1, .image-container2  {
      display: none; /* hide the image */
      
    }

    #container {
      width: 30%;
    }
   
  }
  
</style>

<div class="image-container1">
  <img src="{{ asset('images/kinkekaardid.jpg') }}" alt="kinkekaardid">
</div>

<div class="image-container2">
  <img src="{{ asset('images/kinkekaardid.jpg') }}" alt="kinkekaardid">
</div>


@endsection
