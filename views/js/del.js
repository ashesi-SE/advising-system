$(document).ready(function () {

//   var calendar = $('#calendar').fullCalendar({
//      defaultView: 'agendaWeek',
//      editable: true,
//      selectable: true,
//      //header and other values
//      select: function (start, end, allDay) {
//         endtime = $.fullCalendar.formatDate(end, 'h:mm tt');
//         starttime = $.fullCalendar.formatDate(start, 'ddd, MMM d, h:mm tt');
//         var mywhen = starttime + ' - ' + endtime;
//         $('#createEventModal #apptStartTime').val(start);
//         $('#createEventModal #apptEndTime').val(end);
//         $('#createEventModal #apptAllDay').val(allDay);
//         $('#createEventModal #when').text(mywhen);
//         $('#createEventModal').modal('show');
//      }
//   });
//
//   $('#submitButton').on('click', function (e) {
//      // We don't want this to act as a link so cancel the link action
//      e.preventDefault();
//
//      doSubmit();
//   });
//
//   function doSubmit() {
//      $("#createEventModal").modal('hide');
//      console.log($('#apptStartTime').val());
//      console.log($('#apptEndTime').val());
//      console.log($('#apptAllDay').val());
//      alert("form submitted");
//
//      $("#calendar").fullCalendar('renderEvent',
//              {
//                 title: $('#patientName').val(),
//                 start: new Date($('#apptStartTime').val()),
//                 end: new Date($('#apptEndTime').val()),
//                 allDay: ($('#apptAllDay').val() == "true"),
//              },
//              true);
//   }
});

function syncAjax(u) {
   var obj = $.ajax({url: u, async: false});
   return $.parseJSON(obj.responseText);
}

function assign_students() {

   var user = 0;
   var pass = 0;

   //complete the url
   var u = "action_del.php?cmd=2&user=" + user + "&pass=" + pass;
//   prompt("url", u);
   students = syncAjax(u);



   var u2 = "action_del.php?cmd=3&user=" + user + "&pass=" + pass;
   prompt("url", u2);
   advisors = syncAjax(u2);
//   prompt(r.user);

//                alert(r.result);
   if (r.result === 1) { // signifies manager
      window.open("player_profile.php", "_self");
   }

   else {
      alert("username or password wrong");
      return;
   }
}