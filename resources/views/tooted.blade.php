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


<h5 style="margin-left: 30px; margin-top: 20px; margin-bottom: 20px;">Neid tooteid saate osta meie tantsustuudiost kohapealt.(E-pood valmimisel)</h5>



<div class="product-container">
  <div class="row">
    <div class="product">
      <!-- Product 1 -->
      <img src="{{ asset('images/product-1.jpg') }}" alt="t-valge" style="border-radius: 10px; margin-left: 20px;">
        <h5 style="margin-top: 10px;">T-särk valge</h5>
        <p>Description of Product 1</p>
        <span class="price">30 €</span>
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
      <img src="{{ asset('images/product-2.jpg') }}" alt="t-must" style="border-radius: 10px;">
        <h5 style="margin-top: 10px;">T-särk must</h5>
        <p>Description of Product 2</p>
        <span class="price">30 €</span>
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
      <img src="{{ asset('images/product-3.jpg') }}" alt="tank-valge" style="border-radius: 10px;">
        <h5 style="margin-top: 10px;">Topp valge</h5>
        <p>Description of Product 3</p>
        <span class="price">20 €</span>
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
      <img src="{{ asset('images/product-4.jpg') }}" alt="tank-must" style="border-radius: 10px;">
        <h5 style="margin-top: 10px;">Topp must</h5>
        <p>Description of Product 4</p>
        <span class="price">20 €</span>
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
      <img src="{{ asset('images/product-5.png') }}" alt="retuusid" style="border-radius: 10px; margin-left: 20px;">
        <h5 style="margin-top: 10px;">Retuusid</h5>
        <p>Description of Product 5</p>
        <span class="price">28 €</span>
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
      <img src="{{ asset('images/product-6.png') }}" alt="retuusid" style="border-radius: 10px;">
        <h5 style="margin-top: 10px;">Retuusid (must)</h5>
        <p>Description of Product 6</p>
        <span class="price">28 €</span>
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
      <img src="{{ asset('images/product-7.png') }}" alt="" style="border-radius: 10px;">
        <h5 style="margin-top: 10px;">Lühikesed retuusid (logoga)</h5>
        <p>Description of Product 7</p>
        <span class="price">23 €</span>
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
      <img src="{{ asset('images/product-8.png') }}" alt="" style="border-radius: 10px;">
        <h5 style="margin-top: 10px;">Lühikesed retuusid</h5>
        <p>Description of Product 8</p>
        <span class="price">23 €</span>
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
      <img src="{{ asset('images/product-9.png') }}" alt="" style="border-radius: 10px; margin-left: 20px;">
        <h5 style="margin-top: 10px;">Pusa 1</h5>
        <p>Description of Product 9</p>
        <span class="price">45 €</span>
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
      <img src="{{ asset('images/product-10.png') }}" alt="" style="border-radius: 10px;">
        <h5 style="margin-top: 10px;">Pusa 2</h5>
        <p>Description of Product 10</p>
        <span class="price">40 €</span>
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
      <img src="{{ asset('images/product-11.png') }}" alt="" style="border-radius: 10px;">
        <h5 style="margin-top: 10px;">Seljakott</h5>
        <p>Description of Product 11</p>
        <span class="price">36 €</span>
        <div class="product-actions">
       
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>
    </div>
    <div class="product">
      <!-- Product 12 -->
      <img src="{{ asset('images/product-12.png') }}" alt="" style="border-radius: 10px;">
        <h5 style="margin-top: 10px;">Seljakott (must)</h5>
        <p>Description of Product 12</p>
        <span class="price">36 €</span>
        <div class="product-actions">
       
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>
    </div>
    <div class="product">
      <!-- Product 13 -->
      <img src="{{ asset('images/product-13.jpg') }}" alt="" style="border-radius: 10px; margin-left: 20px;">
        <h5 style="margin-top: 10px;">Tossud (lilla)</h5>
        <p>Description of Product 13</p>
        <span class="price">50 €</span>
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
      <img src="{{ asset('images/product-14.jpg') }}" alt="" style="border-radius: 10px;">
        <h5 style="margin-top: 10px;">Tossud (roosa)</h5>
        <p>Description of Product 12</p>
        <span class="price">50 €</span>
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
      <img src="{{ asset('images/product-15.jpg') }}" alt="" style="border-radius: 10px;">
        <h5 style="margin-top: 10px;">Tossud (must)</h5>
        <p>Description of Product 12</p>
        <span class="price">50 €</span>
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
      <img src="{{ asset('images/product-16.jpg') }}" alt="" style="border-radius: 10px;">
        <h5 style="margin-top: 10px;">Veepudel</h5>
        <p>Description of Product 12</p>
        <span class="price">20 €</span>
        <div class="product-actions">
       
          <input class="amount" type="number" min="1" value="1">
          <button>Lisa ostukorvi</button>
          <button class="delete-button">Kustuta</button>
        </div>
    </div>
  </div>
</div>

@endsection

<style>

  
  .product-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-left: 20px;
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
    width: 80%;
  }

  @media only screen and (max-width: 768px) {
  .products {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
  }
  
  .product {
    width: 100%;
    margin-left: 30px;
  }
  
  .left {
    width: 100%;
  }
  
  .middle {
    display: none;
  }
}

  
</style>

    
