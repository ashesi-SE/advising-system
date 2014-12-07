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
//   prompt("url", u2);
   advisors = syncAjax(u2);

   students.students;
   advisors.advisors;

//   alert(advisors.advisors.length);
//   alert(students.students.length);

   var csAdvisors = new Array();
   var baAdvisors = new Array();
   var csStudents = new Array();
   var baStudents = new Array();

   var temp = null;

// advisors
   for (var i = 0; i < advisors.advisors.length; i++) {
      if (advisors.advisors[i].department_name === "Computer Science") {
         temp = new faculty_class(advisors.advisors[i].faculty_id, advisors.advisors[i].first_name, advisors.advisors[i].middle_name, advisors.advisors[i].last_name, advisors.advisors[i].username, advisors.advisors[i].department_name);
         csAdvisors.push(temp);
      }
      else if (advisors.advisors[i].department_name === "Business Administration") {
         temp = new faculty_class(advisors.advisors[i].faculty_id, advisors.advisors[i].first_name, advisors.advisors[i].middle_name, advisors.advisors[i].last_name, advisors.advisors[i].username, advisors.advisors[i].department_name);
         baAdvisors.push(temp);
      }
   }

// students
   for (var i = 0; i < students.students.length; i++) {
      if (students.students[i].major === "Computer Science") {
         temp = new student_class(students.students[i].student_id, students.students[i].first_name, students.students[i].middle_name, students.students[i].last_name, students.students[i].username, students.students[i].major);
         csStudents.push(temp);

      }
      else if (students.students[i].major === "Business Administration" || students.students[i].major === "Management Information System") {
         temp = new student_class(students.students[i].student_id, students.students[i].first_name, students.students[i].middle_name, students.students[i].last_name, students.students[i].username, students.students[i].major);
         baStudents.push(temp);
      }
   }

//   alert(csAdvisors.length);//2
//   alert(baAdvisors.length);//2
//   alert(csStudents.length);//3
//   alert(baStudents.length);//4
   
   
//   var assigningCs = [[csAdvisors[0],csStudents[0]]];
   var assigningCs = new Array();
   
   
   // number of students per advisor
   
   for(var i = 0; i < csAdvisors.length; i++){
      for(var j = 0; j < csStudents.length/csAdvisors.length; j++){
         assigningCs.push(csAdvisors[i].getId() + " ~ " + csStudents[j].getId());
         
      }
      for(var j = csStudents.length; j < csStudents.length/csAdvisors.length; j--){
         assigningCs.push(csAdvisors[i].getId() + " ~ " + csStudents[j].getId());
         
      }
   }
   debugger;
   for(var i = 0; i< assigningCs.length; i++){
      alert(assigningCs[i]);
   }
   
   

   if (r.result === 1) { // signifies manager
      window.open("player_profile.php", "_self");
   }

   else {
      alert("username or password wrong");
      return;
   }
}