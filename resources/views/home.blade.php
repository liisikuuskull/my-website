@extends('layouts.main')

@section('content')


<body>
    <section class="calendar-section" style="background-image: url('{{ asset('images/background.jpg') }}'); background-repeat: no-repeat; background-size: 100%; background-position-y: 27%;">
    <div id='calendar'></div>
      <div class="container-glass">
          <p class="text">
              Tule postitantsu stuudiosse Kuressaare südalinnas ning avasta endas uusi võimeid. Kui soovid end proovile panna ning samal ajal ka lõbusalt aega veeta, siis oled õiges kohas!
          </p>
          <div class="btn-container">
            <button class="btn" onclick="window.open('https://app.hopitude.com/et/calendar?cl=1460')">Broneeri trenni</button>
          </div>
      </div>
    </section>

</body>

<style>

  /*

div {
    border: 1px solid rgb(255, 0, 0);
  }
  */
  .calendar-section {
    padding: 32px 16px;
  }

    #calendar  {
        width: 80%; /* Decrease the width to make space for the right-hand side */
        margin-inline: auto;
    }
    .fc-daygrid-day.fc-day {
        background-color: #fbc1ac;
        
    }
/* ei muuda
    .fc-daygrid-event-dot {
      color: red!important;
    }
*/
    .fc-day {
        background-color: lightgray;
    }

    .fc-toolbar-title {
        color: black;       
        text-decoration: underline;
        background-color: lightgray;
        border-radius: 10px;
        }

    
    .bg-image {
        height: 100%;
        width: 100%;
        top: 50px;
    }

    #calendar .fc-button-primary {
        background-color: #F7C99D  !important;
    }

    .fc-daygrid-day.fc-day-today {
      background-color: #9FE2BF !important; 
    }

    /* kalendri nurgad ei jää ilusalt
    .fc-scrollgrid {
      border-radius: 10px!;
    }
*/

.container-glass,
.container-glass::before,
.container-glass::after {
  margin-top: 20px;
  border-radius: 7px;
  background-color: rgba(255, 255, 255, .2);
  backdrop-filter: blur(5px);
  box-shadow: 0px 0px 22px rgba(0, 0, 0, 0.08);
}
.container-glass {
  padding: 2rem 1.5rem;
  width: 80%;
  max-width: 280px;
  margin-left: auto;
}
/*
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
*/

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
  background-color: #fbc1ac;
  border: 1px solid #fddfd5;
  border-radius: 5px;
  color: #FFFFFF;
  cursor: pointer;
  transition: all .2s linear;
}

.container-glass .btn:hover {
  background-color: transparent;
  color: #333;
}



a {
color: orangered;
text-decoration: none;
background-color: transparent;
-webkit-text-decoration-skip: objects;
}

.btn-container {
    
    justify-content: center;
    margin-top: 20px;
}


@media only screen and (max-width: 768px) {
        #calendar {
            left: 50%;
            transform: translateX(-50%);
            width: 85%;
        }

        .fc-toolbar-title {
            color: black;       
            text-decoration: underline;
            background-color: lightgray;
            font-size: 18px !important;
            margin-left: 10px !important;   
        }

        .fc-button-group {
            font-size: 10px !important;
        }

        .fc-today-button {
            font-size: 10px !important;
        }

        .btn-container {
            
            justify-content: center;
            margin-top: 20px;
        }

        .col-md-4 {
            margin-top: 190px;
            padding-left: 40px; 
            margin-right: 5px;
        }

        .middle-col {
            display: flex;
            
            margin-right: 7px !important;
            margin-left: 5px !important;
            
            
        }

        #container1 {
            width: 100%;
            margin-top: 90px;
            margin-left: 5px;
            margin-right: 7px;
            margin-bottom: 10px !important;
            padding: 16px;
            color: #333;
            background-color: #fddfd5;
            border-radius: 10px;
            position: center;
        }


/* its not working
        .btn {
            position: center;
            
            margin-top: 50px;
        }
*/
           
}

</style>

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
    <p>Choreo on algajatele mõeldud tantsutund,<br> kuhu on oodatud ka edasijõudnud oma baas-<br>oskusi parandama.<br> Selles tunnis on sul lihtsam kaasa teha,<br> kui oled eelnevalt käinud personaaltreeningutel või läbinud algtaseme kursuse.</p>
  </div>
  <div class="col-md-4">
  <div class="text-center exotic">
    <img src="{{ asset('images/exotic.jpg') }}" alt="exotic" class="rounded-img">
    <h5>Exotic</h5>
    <p>Exotic tunnis me eneseväljenduse koha pealt tagasi ei hoia. Ehime end ilusate tantsuriietega<br>ja spetsiaalsete kontsakingadega, mis panevad meid hästi tundma. Väljendame kehaga oma tundeid ja naudime peeglist oma uhket tantsu. Tantsukava sisaldab liikumisi nii postil, kui ka põrandal. Liikumine olenevalt muusikast ja stiilist võib olla jõuline ja konkreetne või sulgkerge ja voolav.</p>
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


</body>

<style>


.row {
    display: flex;
}

.column {
    flex: 50%;
    padding: 10px;
}





</style>



@endsection


