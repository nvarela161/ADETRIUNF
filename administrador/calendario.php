<?php
require_once 'includes/header.php';
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<title>AdminLTE 3 | Calendar</title>
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback" rel="stylesheet"/>
<!-- Font Awesome -->
<link href="css/all.min.css" rel="stylesheet"/>
<!-- fullCalendar -->
<link href="css/main.css" rel="stylesheet"/>
<!-- Theme style -->
<link href="css/adminlte.min.css" rel="stylesheet"/>
</head>
<body class="<body class="hold-transition layout-top-nav">
<div class="wrapper">

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
<img alt="AdminLTELogo" class="animation__shake" height="130" src="../images/logo.png" width="130"/>
</div>

</div>
</li>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Calendar</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Calendar</li>
</ol>
</div>
</div>
</div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-3">
<div class="sticky-top mb-3">
<div class="card">
<div class="card-header">
<h4 class="card-title">Eventos Diarios</h4>
</div>
<div class="card-body">
<!-- the events -->
<div id="external-events">
<div class="external-event bg-success">Reunion</div>
<div class="external-event bg-warning">Break</div>
<div class="external-event bg-info"> Reunion de Celebracion Corporativa</div>
<div class="external-event bg-primary">Reunion Seguimineto de proyectos</div>
<div class="external-event bg-danger"> Citas pendientes Beneficiarios</div>
<div class="checkbox">
<label for="drop-remove">
<input id="drop-remove" type="checkbox"/>
                        Quitar despues de usar
                      </label>
</div>
</div>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
<div class="card">
<div class="card-header">
<h3 class="card-title">Crear evento</h3>
</div>
<div class="card-body">
<div class="btn-group" style="width: 100%; margin-bottom: 10px;">
<ul class="fc-color-picker" id="color-chooser">
<li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
<li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
<li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
<li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
<li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
</ul>
</div>
<!-- /btn-group -->
<div class="input-group">
<input class="form-control" id="new-event" placeholder="Titulo del evento" type="text"/>
<div class="input-group-append">
<button class="btn btn-primary" id="add-new-event" type="button">Agregar</button>
</div>
<!-- /btn-group -->
</div>
<!-- /input-group -->
</div>
</div>
</div>
</div>
<!-- /.col -->
<div class="col-md-9">
<div class="card card-primary">
<div class="card-body p-0">
<!-- THE CALENDAR -->
<div id="calendar"></div>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
<div class="float-right d-none d-sm-block">
<b>Version</b> 3.2.0
    </div>
<strong> PURO DBA <a href="https://adminlte.io"> nv LPTM</a>.</strong> All rights reserved.
  </footer>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="js/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="js/moment.min.js"></script>
<script src="js/main.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (https://fullcalendar.io/docs/event-object)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      headerToolbar: {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      themeSystem: 'bootstrap',
      //Random default events
      events: [
        {
          title          : 'Reunion',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954', //red
          allDay         : true
        },
        {
          title          : 'Reunion Corporativa',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Break ',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Reunion gestion de proyectos',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Reunion de Celebracion',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Reunion rapida meet',
          start          : new Date(y, m, 13),
          end            : new Date(y, m, 14),
          url            : 'https://meet.google.com/landing?hs=197&authuser=0',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    // Color chooser button
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      // Save color
      currColor = $(this).css('color')
      // Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      // Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      // Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.text(val)
      $('#external-events').prepend(event)

      // Add draggable funtionality
      ini_events(event)

      // Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
</body>
</html>



