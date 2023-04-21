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
                <a class="nav-link" href="tooted">Tooted</a>
            </li>
            
        </ul>
    </div>
</nav>

@yield('content')

<div class="product-container">
  <div class="row">
    <div class="product">
      <!-- Product 1 -->
      <img src="{{ asset('images/product-1.jpg') }}" alt="t-valge">
        <h3>T-särk valge</h3>
        <p>Description of Product 1</p>
        <span class="price">30€</span>
        <div class="product-actions">
        <select class="size">
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
        </select>
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>

    </div>
    <div class="product">
      <!-- Product 2 -->
      <img src="{{ asset('images/product-2.jpg') }}" alt="t-must">
        <h3>T-särk must</h3>
        <p>Description of Product 2</p>
        <span class="price">30€</span>
        <div class="product-actions">
        <select class="size">
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
        </select>
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>

    </div>
    <div class="product">
      <!-- Product 3 -->
      <img src="{{ asset('images/product-3.jpg') }}" alt="tank-valge">
        <h3>Topp valge</h3>
        <p>Description of Product 3</p>
        <span class="price">20€</span>
        <div class="product-actions">
        <select class="size">
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
        </select>
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>

    </div>
    <div class="product">
      <!-- Product 4 -->
      <img src="{{ asset('images/product-4.jpg') }}" alt="tank-must">
        <h3>Topp must</h3>
        <p>Description of Product 4</p>
        <span class="price">20€</span>
        <div class="product-actions">
        <select class="size">
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
        </select>
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>

    </div>
  </div>
  <div class="row">
    <div class="product">
      <!-- Product 5 -->
      <img src="{{ asset('images/product-5.png') }}" alt="retuusid">
        <h3>Retuusid</h3>
        <p>Description of Product 5</p>
        <span class="price">28€</span>
        <div class="product-actions">
        <select class="size">
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
        </select>
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>
    </div>
    <div class="product">
      <!-- Product 6 -->
      <img src="{{ asset('images/product-6.png') }}" alt="retuusid">
        <h3>Retuusid (must)</h3>
        <p>Description of Product 6</p>
        <span class="price">28€</span>
        <div class="product-actions">
        <select class="size">
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
        </select>
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>
    </div>
    <div class="product">
      <!-- Product 7 -->
      <img src="{{ asset('images/product-7.png') }}" alt="">
        <h3>Lühikesed retuusid (logoga)</h3>
        <p>Description of Product 7</p>
        <span class="price">23€</span>
        <div class="product-actions">
        <select class="size">
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
        </select>
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>
    </div>
    <div class="product">
      <!-- Product 8 -->
      <img src="{{ asset('images/product-8.png') }}" alt="">
        <h3>Lühikesed retuusid</h3>
        <p>Description of Product 8</p>
        <span class="price">23€</span>
        <div class="product-actions">
        <select class="size">
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
        </select>
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>
    </div>
    <div class="product">
      <!-- Product 9 -->
      <img src="{{ asset('images/product-9.png') }}" alt="">
        <h3>Pusa 1</h3>
        <p>Description of Product 9</p>
        <span class="price">45€</span>
        <div class="product-actions">
        <select class="size">
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
        </select>
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>
    </div>
    <div class="product">
      <!-- Product 10 -->
      <img src="{{ asset('images/product-10.png') }}" alt="">
        <h3>Pusa 2</h3>
        <p>Description of Product 10</p>
        <span class="price">40€</span>
        <div class="product-actions">
        <select class="size">
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
        </select>
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>
    </div>
    <div class="product">
      <!-- Product 11 -->
      <img src="{{ asset('images/product-11.png') }}" alt="">
        <h3>Seljakott</h3>
        <p>Description of Product 11</p>
        <span class="price">36€</span>
        <div class="product-actions">
       
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>
    </div>
    <div class="product">
      <!-- Product 12 -->
      <img src="{{ asset('images/product-12.png') }}" alt="">
        <h3>Seljakott (must)</h3>
        <p>Description of Product 12</p>
        <span class="price">36€</span>
        <div class="product-actions">
       
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>
    </div>
    <div class="product">
      <!-- Product 13 -->
      <img src="{{ asset('images/product-13.jpg') }}" alt="">
        <h3>Tossud (lilla)</h3>
        <p>Description of Product 13</p>
        <span class="price">50€</span>
        <div class="product-actions">
        <select class="size">
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
        </select>
       
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>
    </div>
    <div class="product">
      <!-- Product 14 -->
      <img src="{{ asset('images/product-14.jpg') }}" alt="">
        <h3>Tossud (roosa)</h3>
        <p>Description of Product 12</p>
        <span class="price">50€</span>
        <div class="product-actions">
        <select class="size">
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
        </select>
       
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>
    </div>
    <div class="product">
      <!-- Product 15 -->
      <img src="{{ asset('images/product-15.jpg') }}" alt="">
        <h3>Tossud (must)</h3>
        <p>Description of Product 12</p>
        <span class="price">50€</span>
        <div class="product-actions">
        <select class="size">
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
        </select>
       
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>
    </div>
    <div class="product">
      <!-- Product 16 -->
      <img src="{{ asset('images/product-16.jpg') }}" alt="">
        <h3>Veepudel</h3>
        <p>Description of Product 12</p>
        <span class="price">20€</span>
        <div class="product-actions">
       
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>
    </div>
  </div>
</div>

<style>
  .product-container {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .product {
    display: inline-block;
    width: 25%;
    margin-bottom: 25px; /* Add margin between each line */
  }

  .row {
    display: flex;
    flex-wrap: wrap;
  }

  .product img {
    width: 100%;
  }

  
</style>

    
