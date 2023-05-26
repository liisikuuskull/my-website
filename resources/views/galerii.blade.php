@extends('layouts.main')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="grid">
    <ul id="hexGrid">
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="#">
            <img src="{{ asset('images/galerii1.jpg') }}" alt="Galerii1">
          </a>
        </div>
      </li>
        
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="#">
          <img src="{{ asset('images/galerii2.jpg') }}" alt="Galerii2">  
          </a>
        </div>
      </li>
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="#">
          <img src="{{ asset('images/galerii3.jpg') }}" alt="Galerii3"> 
          </a>
        </div>
      </li>
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="#">
          <img src="{{ asset('images/galerii4.jpg') }}" alt="Galerii4">  
          </a>
        </div>
      </li>
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="#">
          <img src="{{ asset('images/galerii5.jpg') }}" alt="Galerii5">
            
          </a>
        </div>
      </li>
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="#">
          <img src="{{ asset('images/galerii6.jpg') }}" alt="Galerii6">
            
          </a>
        </div>
      </li>
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="#">
          <img src="{{ asset('images/galerii7.jpg') }}" alt="Galerii7">
            
          </a>
        </div>
      </li>
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="#">
          <img src="{{ asset('images/galerii8.jpg') }}" alt="Galerii8">
            
          </a>
        </div>
      </li>
      <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="#">
          <img src="{{ asset('images/galerii9.jpg') }}" alt="Galerii9">  
          </a>
        </div>
      </li>
      
     <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="#">
          <img src="{{ asset('images/galerii10.jpg') }}" alt="Galerii10">   
          </a>
        </div>
      </li>
        <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="#">
          <img src="{{ asset('images/galerii11.jpg') }}" alt="Galerii11">  
          </a>
        </div>
      </li>
          <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="#">
          <img src="{{ asset('images/galerii12.jpg') }}" alt="Galerii12">   
          </a>
        </div>
      </li>
        <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="#">
          <img src="{{ asset('images/galerii13.jpg') }}" alt="Galerii13">  
          </a>
        </div>
      </li>
        <li class="hex">
        <div class="hexIn">
          <a class="hexLink" href="#">
          <img src="{{ asset('images/galerii14.jpg') }}" alt="Galerii14">   
          </a>
        </div>
      </li>
    </ul>
      </div>

</body>
</html>


<style>


body {
  font-family: 'Open Sans', sans-serif;
  background-color: #e0e0e0;
}


#hexGrid {
  display: flex;
  flex-wrap: wrap;
  width: 90%;
  margin: 0 auto;
  overflow: hidden;
  font-family: sans-serif;
  list-style-type: none;
}

.hex {
  position: relative;
  visibility:hidden;
  outline:1px solid transparent; 
  transition: all 0.5s;
  backface-visibility: hidden;
  will-change: transform;
  transition: all 0.5s;
}
.hex::after{
  content:'';
  display:block;
  padding-bottom: 86.602%;  /* =  100 / tan(60) * 1.5 */
}
.hexIn{
  position: absolute;
  width:96%;
  padding-bottom: 110.851%; /* =  width / sin(60) */
  margin: 2%;
  overflow: hidden;
  visibility: hidden;
  outline:1px solid transparent; /* fix for jagged edges in FF on hover transition */
  -webkit-transform: rotate3d(0,0,1,-60deg) skewY(30deg);
      -ms-transform: rotate3d(0,0,1,-60deg) skewY(30deg);
          transform: rotate3d(0,0,1,-60deg) skewY(30deg);
    transition: all 0.5s;
}
.hexIn * {
  position: absolute;
  visibility: visible;
  outline:1px solid transparent; /* fix for jagged edges in FF on hover transition */
}
.hexLink {
    display:block;
    width: 100%;
    height: 100%;
    text-align: center;
    color: #fff;
    overflow: hidden;
    -webkit-transform: skewY(-30deg) rotate3d(0,0,1,60deg);
        -ms-transform: skewY(-30deg) rotate3d(0,0,1,60deg);
            transform: skewY(-30deg) rotate3d(0,0,1,60deg);
}




/*** HEX CONTENT **********************************************************************/
.hex img {
  left: -100%;
  right: -100%;
  width: auto;
  height: 100%;
  margin: 0 auto;
}


#demo1 {
  color: #F5CE95;
  text-transform: capitalize;
    text-align: center;
  bottom: 50%;
  padding-top:50%;
  font-size: 1.5em;
  z-index: 1;
}


#demo2 {
top: 50%;
text-align: center;
text-transform: uppercase;
    
}

.img {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-position: center center;
  background-size: cover;
  overflow: hidden;
-webkit-clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
}

.img:before, .img:after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  content: '';
  opacity: 0;
  transition: opacity 0.5s;
}
.img:before {
  background: rgba(22, 103, 137, 0.3)
}
.img:after {
  background: linear-gradient(to top, transparent, rgba(0, 0, 0, 0.5), transparent);
}

/*** HOVER EFFECT  **********************************************************************/



.hexLink:hover h1, .hexLink:focus h1,
.hexLink:hover p, .hexLink:focus p{
opacity:1;
transition: 0.8s;
}


.hexIn:hover .img:before,
.hexIn:hover .img:after,
.hexIn:hover .hexLink {
  opacity: 1;
}

.hex img:hover {
  transform: scale(1.1); /* Increase the scale of the image on hover */
}

.hex img {
  transition: transform 0.5s; /* Add a smooth transition */
}

/**siia lisan juurde treenerid */

html {
  font-size: 16px;
}
body {
  background-color: #e0e0e0;         /*#fddfd5;*/
}
section {
  padding: 80px;
}
.hero {
  display: flex;
  flex-direction: row;
  width: 65%;
  margin: auto;
}
div {
  margin-right: 40px;
  padding-top: 0;
}
.hero h1{  
  text-decoration: underline, #fddfd5 ;  /* ei tööta*/

}
h1 {
  color: black;
  font-size: 2em;
  padding-bottom: 25px;
}
p {
  color: black;
  font-size: 1em;
  margin-bottom: 70px;
}

/*** HEXAGON SIZING AND EVEN ROW INDENTATION *****************************************************************/
@media (min-width:1201px) { /* <- 5-4  hexagons per row */
  #hexGrid{
    padding-bottom: 4.4%
  }
  .hex {
    width: 20%; /* = 100 / 5 */
  }
  .hex:nth-child(9n+6){ /* first hexagon of even rows */
    margin-left:10%;  /* = width of .hex / 2  to indent even rows */
  }
}

@media (max-width: 1200px) and (min-width:901px) { /* <- 4-3  hexagons per row */
  #hexGrid{
    padding-bottom: 5.5%;
    font-size: 13px;
  }
  .hex {
    width: 25%; /* = 100 / 4 */
  }
  .hex:nth-child(7n+5){ /* first hexagon of even rows */
    margin-left:12.5%;  /* = width of .hex / 2  to indent even rows */
  }
}

@media (max-width: 900px) and (min-width:601px) { /* <- 3-2  hexagons per row */
  #hexGrid{
    padding-bottom: 7.4%;
    font-size: 14px;
  }
  .hex {
    width: 33.333%; /* = 100 / 3 */
  }
  .hex:nth-child(5n+4){ /* first hexagon of even rows */
    margin-left:16.666%;  /* = width of .hex / 2  to indent even rows */
  }
}

@media (max-width: 600px) { /* <- 2-1  hexagons per row */
  #hexGrid{
    padding-bottom: 11.2%;
    font-size: 12px;
  }
  .hex {
    width: 50%; /* = 100 / 3 */
  }
  .hex:nth-child(3n+3){ /* first hexagon of even rows */
    margin-left:25%;  /* = width of .hex / 2  to indent even rows */
  }
}

@media (max-width: 400px) {
    #hexGrid {
        font-size: 8px;
    }
  
  
}



</style>


@endsection