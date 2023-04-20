
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/locales/et.js'></script>

    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          height: 'auto',
          contentHeight: 'auto',
          timeZone: 'Europe/Tallinn' ,
		      locale: 'et' ,
          firstDay: 1

        });
        calendar.render();
      });


      function save_event() {
        // Get the input values
        var event_name = document.getElementById('event_name').value;
        var event_comment = document.getElementById('event_comment').value;
        var event_start_date = document.getElementById('event_start_date').value;
        var event_end_date = document.getElementById('event_end_date').value;

        // Create a new event object
        var new_event = {
          title: event_name,
          description: event_comment,
          start: event_start_date,
          end: event_end_date
        };

        // Add the event to the calendar
        calendar.addEvent(new_event);

        // Close the modal
        $('#event_entry_modal').modal('hide');
      }

      

    </script>
  </head>
  <body>
    <div id='calendar'></div>

    <form action="eventInsert" method="post" enctype="multipart/form-data">
      @csrf
    
    <div class="modal fade" id="event_entry_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="modalLabel">Lisa uus treening</h3>
            
          
            </button>
          </div>
          <div class="modal-body">
            <div class="img-container">
              <div class="row">
                <div class="col-sm-12">  
                  <div class="form-group">
                    
                    <label for="event_name" class="control-label">Trenni nimi</label>
                    <select name="event_name" id="event_name" class="form-control">
						<option value="valik1">Choreo</option>
						<option value="valik2">Exotic tants</option>
						<option value="valik3">Tricks</option>
    				</select>
                  </div>
				  <div class="form-group">
    				<h5><label for="event_comment" class="control-label">Kommentaar</label></h5>
   					 <textarea name="event_comment" class="form-control" placeholder="Lisa siia kommentaar"></textarea>
				 </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">  
                  <div class="form-group">
                  <label for="event_start_date" class="control-label">Algus</label>
                  <input type="datetime-local" name="event_start_date" class="form-control onlydatepicker" placeholder="Event start date">

                </div>
                <div class="col-sm-6">  
                  <div class="form-group">
                    <label for="event_end_date" class="control-label">Lõpp</label>
                    <input type="datetime-local" name="event_end_date" class="form-control" placeholder="Event end date">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
          <button type="button" id="save-event-btn" class="btn btn-primary" onclick="save_event()" style="font-size: 16px; padding: 10px 20px; border-radius: 10px; background-color: #b28fa3;">Salvesta</button>
          
          </div>
        </div>
      </div>
    </div>

   </form>
  </body>
</html>

