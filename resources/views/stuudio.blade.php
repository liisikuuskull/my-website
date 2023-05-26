@extends('layouts.main')

@section('content')

<body>
  <div class="container-studio">
    <h3>Stuudiost</h3>
    <p>Siia tuleb mingi jutt stuudio kohta. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>


    
  <section>
        <div class="image image1">
            <img src="{{ asset('images/treener2.jpg') }}" alt="treener2">
        </div>
        
        <div>
            <h4>Helen</h4>
            <p>Postitantsu treener Helen on tegelenud postitantsuga alates 2015 aastast. Aastal 2016 läbis ta rahvusvahelise X-Pert Pole Fitness 1/2 taseme postitantsutreeneri koolituse. 2020 aastal lõi Helen Kuressaarde esimese postitantsu stuudio Studio Femme. 2021 aastal valiti ta Meow stuudios lemmikuks esinejaks. 2023 aastal tuli ta Paramonova Exotic Style Laboratory postitantsu kursuse võitjaks. 
 
                Oma trennides meeldib Helenile luua naiselikke ja pehmeid liikumisi. Exotic stiilidest on talle kõige omasem Flow stiil. Heleni grupitreeningud on täis voolavad liikumisi ja sirutusi. Helenile meeldib lisaks anda eratreeninguid, sest siis ta saab pühenduda kogu oma energia ainult ühe inimese vajadustele ja tema kiiremale arengule.
            </p>
        </div>
    </section>
  
    <section>
        <div class="image image1">
            <img src="{{ asset('images/treener1.jpg') }}" alt="treener1">
        </div>
        
        <div>
            <h4>Pille-Riin</h4>
            <p>Exotic treener Pille-Riin on tegelenud postitantsuda aastast 2021. Samal aastal alustas ta tööd treenerina meie stuudios. Pille-Riin armastab grupitreeninguid ning tema trennid on alati jõulised ja hoogsad. 

                Tantsutrennides meeldib Pille-Riinile luua emotsioonidega temperamentseid koreograafiaid, kus eneseväljenduse koha pealt tagasi ei hoita. Samuti pöörab ta suurt tähelepanu turvalisusele ja sellele, et tunni sisu vastaks treenijate tasemele.

                Pille-Riin on läbinud Paramonova Exotic Style Labratory kursuse 2022 aastal ja 2023 aastal läbis ta edukalt rahvusvahelise XPert Essencial Science of Heels postitantsutreeneri koolituse. Lisaks on ta õppinud Tallinna Tervishoiukõrgkooli õeks ja töötab juba mitmeid aastaid Kuressaare Haiglas.</p>
        </div>
    </section>
  

</body>

<style>
  body {
    background-color: #e0e0e0;
    font-family: 'Open Sans', sans-serif;
  }

  .container-studio {
    width: 70%;
    margin-top: 90px;
    margin-left: 30px;
    padding: 16px;
    color: #333;
    background-color: #fddfd5;
    border-radius: 10px;
  }


section {
    position: relative;
    width: 70%;
    padding: 50px;
}

.image {
    position: relative;
    overflow: hidden;
}

.image.image1 {
    width: 350px;
    height: 350px;
    float: left;
    border-radius: 50%;
    margin: 20px;
    shape-outside: circle();
}

.image img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

section h4 {
    color: black;
    text-decoration: underline;
    text-decoration-color: #fddfd5;
    font-size: 2em;
    margin-bottom: 20px;
}

section p {
    color: black;
    line-height: 1.5em;
    text-align: justify;
}

@media (max-width: 768px) {
    .container-studio {
      width: 90%;
      margin: 20px auto;
    }

    section {
      width: 90%;
      padding: 20px;
    }

    .image.image1 {
      width: 200px;
      height: 200px;
      margin: 10px;
    }
  }



 
</style>

@endsection



