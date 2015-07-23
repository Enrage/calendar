<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<style type='text/css'>

	body {
		margin-top: 40px;
		text-align: center;
		font-size: 14px;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		}

	#loading {
		position: absolute;
		top: 5px;
		right: 5px;
		}

	#calendar {
		width: 900px;
		margin: 0 auto;
		}

</style>
<META http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel='stylesheet' type='text/css' href='./css/fullcalendar.css' />
<script type='text/javascript' src='./jquery/jquery.js'></script>
<script type='text/javascript' src='./js/fullcalendar.js'></script>
<script type='text/javascript' src='./js/my.js'></script>
<script type='text/javascript'>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			// US Holidays
			events: $.fullCalendar.myFeed(
				'./ajax/my.php',
				{draggable: false}
			),
			eventClick: function(event) {
				window.open(event.url, 'gcalevent', 'width=700,height=600');
				return false;
			},
			loading: function(bool) {
				if (bool) $('#loading').show();
				else $('#loading').hide();
			}
		});

	});

</script>
</head>
<body>
<!-- <div id='loading' style='display:none'>loading...</div> -->
<div id='calendar'></div>
</body>
</html>