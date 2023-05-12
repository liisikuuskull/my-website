@extends('layouts.main')

@section('content')


<body>

 
  <div id="text-container1">
    <h4>Peopakett 60 min/ 130 €</h4>
    <p>Pakett sisaldab: 45 minutit spetsiaalselt <br> teile ettevalmistatud postitantsu trenni. <br> 15 minutit jääb grupipiltideks ning trennis õpitu pildistamiseks ja filmimiseks.</p>
  </div>

  <div id="text-container2">
    <h4>Peopakett 90 min/ 165 €</h4>
    <p>Pakett sisaldab 1h spetsiaalselt teile <br> ettevalmistatud postitantsu trenni. <br> Lisaks 30 minutit stuudio aega, et saaksite <br> mõnusalt koos olla, teha grupipilte ning trennis õpitut pildistada ja filmida.</p>
  </div>

  <div id="picture-container">
    <img src="{{ asset('images/peopakett.jpg') }}" alt="peopakett" style="width: 25%; height: 25%; margin-left: 120px; margin-top: -500px; border-radius: 3%;">

  </div>
  

  </body>

  <style>
    body {

    background-color: #e0e0e0;
    font-family: 'Open Sans', sans-serif;
    
    
   
    height: 97.33vh;
  
}
/*
  h3 {
        margin-top: -350px;
        margin-right: 670px;
        font-size: 36px;
        text-align: center;
        color: #333;
        
      }
/*
#card {
  width: 300px;
  height: 400px;
  z-index: 2;
  background: rgba(255, 255, 255, 0.05);
  box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
  box-shadow: inset 1px 1px 0.12px rgba(255, 255, 255, 0.4),
    1px 1px 3px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-radius: 10px;
  border: 1px solid rgba(255, 255, 255, 0.18);
  margin-top: 80px;
  

  animation: move 5s ease-in-out infinite;
  background-clip: padding-box;
}
/*
h1 {
  position: absolute;
  z-index: 1;
  font-size: 200px;
  letter-spacing: 15px;
  color: #fff;
}



@keyframes move {
  0% {
    transform: translateX(-200px);
  }
  50% {
    transform: translateX(200px);
  }
  100% {
    transform: translateX(-200px);
  }
}

#rect1 {
  top: 150px;
  width: 100px;
  height: 100px;
  background: rgba(255, 255, 255, 0.1);
  box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
  box-shadow: inset 1px 1px 0.12px rgba(255, 255, 255, 0.4),
    1px 1px 3px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  border-radius: 10px;
  border: 1px solid rgba(255, 255, 255, 0.18);
  position: absolute;
  margin-left: 1070px;
  margin-top: 80px;
}

#rect2 {
  top: 420px;
  width: 100px;
  height: 100px;
  background: rgba(255, 255, 255, 0.1);
  box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
  box-shadow: inset 1px 1px 0.12px rgba(255, 255, 255, 0.4),
    1px 1px 3px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  border-radius: 10px;
  border: 1px solid rgba(255, 255, 255, 0.18);
  position: absolute;
  margin-left: 1060px;
 
}

*/

#text-container1 {
    width: 30%;
    margin-left: 700px;
    margin-top: 60px;
    padding: 16px;
    color: #333;
    background-color: #fddfd5;
  }

  #text-container2 {
    width: 30%;
    margin-left: 700px;
    margin-top: 70px;
    padding: 16px;
    color: #333;
    background-color: #fddfd5;
    
  }

  #text-container2 p {
    font-size: 16px;
    line-height: 1.5;
    margin-top: 10px;

  }

  @media only screen and (max-width: 768px) {
            .left {
                width: 50%;
            }

            .middle {
                width: 50%;
            }

            #text-container1, #text-container2 {
                position: relative;
                width: 90%;
                margin-left: auto;
                margin-right: auto;
                margin-top: 20px;
                padding: 10px;
                text-align: center;
                z-index: 1; /* text is then front and moving part is back */
              }


          }

  



  </style>


@endsection

