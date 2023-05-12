@extends('layouts.main')

@section('content')

<style>

  body {
    background-color: #e0e0e0;
    font-family: 'Open Sans', sans-serif;
    
  }
  .rounded-img {
    width: 100%;
    max-width: 200px;
    height: auto;
    border-radius: 50%;
    object-fit: cover;
    object-position: center center;
    margin: 0 auto;
    display: block;
  }
  
  .col-md-4 {
    margin-top: 190px;
    padding-left: 40px; 
    /*
    background-color: #fddfd5; 
   */ 
  }
  
  
  .middle-col {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .exotic {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin-top: -70px; /* add negative margin here */
}


h5 {
  background-color: #fddfd5;
  padding: 5px;
  display: inline-block;
  border-radius: 10px;
}


</style>

<div class="row">
  <div class="col-md-4">
    <div class="text-center">
      <img src="{{ asset('images/choreo.jpeg') }}" alt="choreo" class="rounded-img">
    </div>
    <h5>Choreo</h5>
    <p>Choreo on algajatele mõeldud tantsutund, kuhu on oodatud ka edasijõudnud oma baasoskusi parandama. Selles tunnis on sul lihtsam kaasa teha, kui oled eelnevalt käinud personaaltreeningutel või läbinud algtaseme kursuse.</p>
  </div>
  <div class="col-md-4">
  <div class="text-center exotic">
    <img src="{{ asset('images/exotic.jpg') }}" alt="exotic" class="rounded-img">
    <h5>Exotic</h5>
    <p>Exotic tunnis me eneseväljenduse koha pealt tagasi ei hoia. Ehime end ilusate tantsuriietega ja spetsiaalsete kontsakingadega, mis panevad meid hästi tundma. Väljendame kehaga oma tundeid ja naudime peeglist oma uhket tantsu. Tantsukava sisaldab liikumisi nii postil, kui ka põrandal. Liikumine olenevalt muusikast ja stiilist võib olla jõuline ja konkreetne või sulgkerge ja voolav.</p>
  </div>
</div>

  <div class="col-md-4">
    <div class="text-center">
      <img src="{{ asset('images/tricks.jpeg') }}" alt="tricks" class="rounded-img">
    </div>
    <h5>Tricks</h5>
    <p>Treening pakub põnevat väljakutset ja eneseteostamise võimalust. Treeningul keskendume postitantsu trikkidele.</p>
  </div>
</div>

@endsection
