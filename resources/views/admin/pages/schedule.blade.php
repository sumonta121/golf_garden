
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 @include('admin.partiles.top_head')


<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="main-wrapper">

  @include('admin.partiles.top_header')

  @include('admin.partiles.left_menu')


<link href='{{ asset('calender_events/fullcalendar.css')}}' rel='stylesheet' />
<link href='{{ asset('calender_events/fullcalendar.print.css')}}' rel='stylesheet' media='print' />

<style>	
	#wrap {
		width: 1100px;
		margin: 0 auto;
		}
		
	#external-events {
		float: left;
		width: 150px;
		padding: 0 10px;
		text-align: left;
		}
		
	#external-events h4 {
		font-size: 16px;
		margin-top: 0;
		padding-top: 1em;
		}
		
	.external-event { /* try to mimick the look of a real event */
		margin: 10px 0;
		padding: 2px 4px;
		background: #3366CC;
		color: #fff;
		font-size: .85em;
		cursor: pointer;
		}
		
	#external-events p {
		margin: 1.5em 0;
		font-size: 11px;
		color: #666;
		}
		
	#external-events p input {
		margin: 0;
		vertical-align: middle;
		}

	#calendar {
/* 		float: right; */
        margin: 0 auto;
		width: 900px;
		background-color: #FFFFFF;
		  border-radius: 6px;
        box-shadow: 0 1px 2px #C3C3C3;
		-webkit-box-shadow: 0px 0px 21px 2px rgba(0,0,0,0.18);
-moz-box-shadow: 0px 0px 21px 2px rgba(0,0,0,0.18);
box-shadow: 0px 0px 21px 2px rgba(0,0,0,0.18);
		}

</style>
  <div class="page-wrapper">
    <div class="content container-fluid">
      <div class="row">
        <div class="col-xs-4">
          <h4 class="page-title">Booking Schedule</h4>
        </div>
      </div>
      <div class="row staff-grid-row">

		<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
          <div>
		@if ($errors->any())
			<div class="alert alert-danger">
			 <button type="button" class="close" data-dismiss="alert">&times;</button>
				<ul>
					@foreach ($errors->all() as $error)
						<p>{{ $error }}</p>
					@endforeach
				</ul>
			</div>
		@endif

		@if (Session::has('success'))
		<div class="alert alert-success">
		<a type="button" class="close" data-dismiss="alert">&times;</a>
		<p>{{ Session::get('success') }}</p>
		</div>
		@endif

		</div>
        </div>

			<div id='calendar'></div>


      </div>
    </div>
  </div>

</div>
<div class="sidebar-overlay" data-reff="#sidebar"></div>

@include('admin.partiles.bottom_script')


</body>
</html>

<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				right: 'prev,next today',
				center: 'title',
				left: 'month,agendaWeek,agendaDay'
			},
			
			
			editable: true,
			eventLimit: false, // allow "more" link when too many events
			selectable: true,
			allDaySlot: false,
			selectHelper: true,
			select: function(start, end, allDay) {			
				var aaaaaa = new Date(start);	
				var title = window.location.href = "{{ URL('setup-booking-schedule') }}"+'/'+aaaaaa; 
				
				
			

				calendar.fullCalendar('unselect');
			},
			events: [
				<?php foreach($booking as $v){?>
				{
					title: '<?php echo $v->shift.' Event';?>',				
					start: '<?php echo $v->date_of_reserv;?>'
				},		
				<?php }?>			
			]
		});
		
	});

</script>


<script src='{{ asset('calender_events/moment.min.js')}}'></script>
<script src='{{ asset('calender_events/jquery.min.js')}}'></script>
<script src='{{ asset('calender_events/fullcalendar.min.js')}}'></script>