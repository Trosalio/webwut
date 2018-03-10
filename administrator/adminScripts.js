$(document).ready(function(e){
	showAllOrganizer();
	$('#show-attendant').hide();
	$('#show-administrator').hide();
	$('#show-event').hide();
	

// Organizer
	$('#btn-show-organizer').click(function(e) {
		$('#show-event').hide();
		$('#show-attendant').hide();
		$('#show-administrator').hide();
		$('#show-organizer').show();
		showAllOrganizer();
	})

	function showAllOrganizer(){
		$.ajax({
			url: 'organizerList.php',
			type: 'POST',
			dataType:"json",
			success: function(organizer){
				tbody = $("tbody.organizer-list");
				tbody.empty();
				organizer.forEach(row=>{
					console.log(row);
					
					tr = tbody.append("<tr></tr>").children().last();
					tr.append("<td scope='row' style='text-align: center;'>" + row.id + "</td>");
					tr.append("<td scope='row'>" + row.userID + "</td>");
					tr.append("<td scope='row'>" + row.orgName + "</td>");
					tr.append("<td scope='row'>" + row.email + "</td>");
					tr.append("<td scope='row'>" + row.phoneNo + "</td>");
				});
				

			}
		});
	}

// Attendant
	$('#btn-show-attendant').click(function(e) {
		$('#show-organizer').hide();
		$('#show-event').hide();
		$('#show-administrator').hide();
		$('#show-attendant').show();
	})

// Administrator
	$('#btn-show-administrator').click(function(e) {
		$('#show-organizer').hide();
		$('#show-attendant').hide();
		$('#show-event').hide();
		$('#show-administrator').show();
	})

// Event
	$('#btn-show-event').click(function(e) {
		$('#show-organizer').hide();
		$('#show-attendant').hide();
		$('#show-administrator').hide();
		$('#show-event').show();
		showAllEvent();
		function showAllEvent(){
		$.ajax({
			url: 'eventList.php',
			type: 'POST',
			dataType:"json",
			success: function(event){
				tbody = $("tbody.event-list");
				tbody.empty();
				event.forEach(row=>{
					console.log(row);
					day = row.date.slice(8, 10);
					month = row.date.slice(5, 7);
					year = row.date.slice(0, 4);
			        hour = row.date.slice(11, 13);
			        minute = row.date.slice(14, 16);
					tr = tbody.append("<tr></tr>").children().last();

					tr.append("<td scope='row' style='text-align: center;'>" + row.eventID + "</td>");
					tr.append("<td scope='row' style='text-align: center;'>" + day+"/"+month+"/"+year+" "+hour+":"+minute + "</td>");
					tr.append("<td scope='row'>" + row.eventName + "</td>");
					tr.append("<td scope='row'>" + row.location + "</td>");
					tr.append("<td scope='row' style='text-align: center;'>" + row.capacity + "</td>");
					tr.append("<td scope='row' style='text-align: center;'>" + row.price + "</td>");
					tr.append("<td scope='row'>" + row.type + "</td>");
					tr.append("<td scope='row'>" + row.orgName + "</td>");
				});
				

			}
		});
	}

	})

});


