@extends('layouts.main')

@section('content')


<body>
    <div>
        <img src="{{ asset('images/background.jpg') }}" alt="background" class="bg-image">
    </div>

    <div class="container-glass">
        <p class="text">
	
            Tule postitantsu stuudiosse Kuressaare südalinnas ning avasta endas uusi võimeid. Kui soovid end proovile panna ning samal ajal ka lõbusalt aega veeta, siis oled õiges kohas!
        </p>
        <button class="btn" onclick="window.open('https://app.hopitude.com/et/calendar?cl=1460')">Broneeri trenni</button>

    </div>

</body>






<style>

  
    #calendar  {
        width: 80%; /* Decrease the width to make space for the right-hand side */
        float: auto; /* Float the calendar to the right-hand side */
        height: 60vh;
        position: absolute;
        top: 80px;
        left: 100px;
        bottom: 0;
        right: 0; 
        
    
        
        
    }
    .fc-daygrid-day.fc-day {
        background-color: #fbc1ac;
        
    }

    .fc-day {
        background-color: lightgray;
    }

    .fc-toolbar-title {
        color: black;       
        text-decoration: underline;
        background-color: lightgray;
        }

    
    .bg-image {
        height: 100%;
        width: 100%;
        top: 50px;
    }

    #calendar .fc-button-primary {
        background-color: #F7C99D  !important;
    }

   

.container-glass,
.container-glass::before,
.container-glass::after {
  border-radius: 7px;
  background-color: rgba(255, 255, 255, .2);
  backdrop-filter: blur(5px);
  box-shadow: 0px 0px 22px rgba(0, 0, 0, 0.08);
}
.container-glass {
  position: fixed;
  
  bottom: 200px;
  padding: 2rem 1.5rem;
  width: 80%;
  max-width: 280px;
  margin-left: 940px;
  margin-top: 0px;
}
.container-glass::before,
.container-glass::after {
  content: '';
  position: absolute;
}
.container-glass::before {
  height: 80px;
  width: 80px;
  top: -10px;
  left: -40px;
  z-index: -1;
}
.container-glass::after {
  height: 40px;
  width: 40px;
  bottom: 20px;
  right: -10px;
  z-index: 2;
}

.container-glass .img {
  width: 100%;
  border-radius: 7px;
}

.container-glass .text {
  font-size: 1.01rem;
  color: #FFFFFF;
  margin: 2rem 0;
  text-align: justify;
}

.container-glass .btn {
  display: block;
  margin: auto;
  font-family: 'PT Sans', sans-serif;
  font-size: 1.02rem;
  width: 80%;
  max-width: 200px;
  padding: .6rem 1rem;
  background-color: transparent;
  border: 1px solid #fddfd5;
  border-radius: 5px;
  color: #FFFFFF;
  cursor: pointer;
  transition: all .2s linear;
}
.container-glass .btn:hover {
  background-color: #fbc1ac;
  color: #333;
}


a {
color: orangered;
text-decoration: none;
background-color: transparent;
-webkit-text-decoration-skip: objects;
}
@media only screen and (max-width: 768px) {
        #calendar {
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
        }

        .container-glass {
            display: none;
        }


/* its not working
        .btn {
            position: center;
            
            margin-top: 50px;
        }
*/
           
}

</style>


<div id='calendar'></div>

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/locales/et.js'></script>


<script>
let timetable = {!! json_encode($timetable) !!}
console.log (timetable)
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridWeek',
        height: 'auto',
        contentHeight: 'auto',
        timeZone: 'Europe/Tallinn' ,
        locale: 'et',
        firstDay: 1,
        events: timetable.events,
        eventClick: function(info) {

            console.log(info)

            
        }
    });
    calendar.render();
    console.log(calendar)
});

</script>

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


