$(document).ready(function(e){
	showAllOrganizer();
	$('#show-attendant').hide();
	$('#show-event').hide();
	$('#list').click(function(e){
  	console.log("งือ");
});
// Organizer
	$('#btn-show-organizer').click(function(e) {
		$('#show-event').hide();
		$('#show-attendant').hide();
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
					// td1 = "<td scope='row' style='text-align: center;'>" + row.id + "</td>";
					// td2 = "<td scope='row'>" + row.userID + "</td>";
					// td3 = "<td scope='row'>" + row.orgName + "</td>";
					// td4 = "<td scope='row'>" + row.email + "</td>";
					// td5 = "<td scope='row'>" + row.phoneNo + "</td>";
					// $('.organizer-list').append("<tr id='list'>"+td1+td2+td3+td4+td5+"</tr>");
					tr = tbody.append("<tr id='list'></tr>").children().last();
					tr.append("<td scope='row' style='text-align: center;'>" + row.id + "</td>");
					tr.append("<td scope='row'>" + row.userID + "</td>");
					tr.append("<td scope='row'>" + row.orgName + "</td>");
					tr.append("<td scope='row'>" + row.email + "</td>");
					tr.append("<td scope='row'>" + row.phoneNo + "</td>");
				});
			}
		});
	}
	document.getElementById('form-add-organizer').style.display='none';
	$('#btn-add-organizer').click(function(e) {
		document.getElementById('form-add-organizer').style.display='block';
	})
	$('#cancel-add-organizer').click(function(e) {
		console.log("cancel");
		document.getElementById('form-add-organizer').style.display='none';
	})
	$('#confirm-add-organizer').click(function(e) {
		$("#organizer-form").ajaxForm({
		url: "addOrganizer.php",
		type: "POST",
		success: function(response){
			// console.log(response);
			// if (response == "true"){
			//     $('#snackbar').text('Message sent');
			//     document.getElementById('toID').value = '';
			// 	document.getElementById('msg-box').value = '';
			// 	document.getElementById("file").value = '';
			// 	$('#preview').attr('src', '');
			// 	$(".btnDeleteFile").hide();
			// 	document.getElementById("snackbar").style.backgroundColor ="#61cf6a";
			// }else if (response == "false"){
			// 	$('#snackbar').text('Invalid user ID');
			// 	document.getElementById("snackbar").style.backgroundColor = "#ff5432";
			// }else if (response == "not ID"){
			// 	$('#snackbar').text('Please enter user ID');
			// 	document.getElementById("snackbar").style.backgroundColor = "#ff5432";
			// }else{
			// 	$('#snackbar').text('Fill in not complete');
			// 	document.getElementById("snackbar").style.backgroundColor = "#ff5432";
			// }

			// snackbar: alert sending msg 
			// var x = document.getElementById("snackbar");
		 //    x.className = "show";
		 //    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
		}
	})
	})

// Attendant
	$('#btn-show-attendant').click(function(e) {
		$('#show-organizer').hide();
		$('#show-event').hide();
		$('#show-attendant').show();
		showAllAttendant();
	})

	function showAllAttendant(){
		$.ajax({
			url: 'attendantList.php',
			type: 'POST',
			dataType:"json",
			success: function(attendant){
				tbody = $("tbody.attendant-list");
				tbody.empty();
				attendant.forEach(row=>{
					console.log(row);
					td1 = "<td scope='row' style='text-align: center;'>" + row.id + "</td>";
					td2 = "<td scope='row'>" + row.userID + "</td>";
					td3 = "<td scope='row'>" + row.firstName + "</td>";
					td4 = "<td scope='row'>" + row.lastName + "</td>";
					td5 = "<td scope='row'>" + row.email + "</td>";
					td6 = "<td scope='row' style='text-align: center;'>" + row.age + "</td>";
					td7 = "<td scope='row'>" + row.phoneNo + "</td>";
					td8 = "<td scope='row'>" + row.gender + "</td>";
					$('.attendant-list').append("<tr id='list'>"+td1+td2+td3+td4+td5+td6+td7+td8+"</tr>");
				});
			}
		});
	}
	document.getElementById('form-add-attendant').style.display='none';
	$('#btn-add-attendant').click(function(e) {
		document.getElementById('form-add-attendant').style.display='block';
	})
	$('#cancel-add-attendant').click(function(e) {
		console.log("cancel");
		document.getElementById('form-add-attendant').style.display='none';
	})
	$('#confirm-add-attendant').click(function(e) {
		// sent to DB
	})


// Event
	$('#btn-show-event').click(function(e) {
		$('#show-organizer').hide();
		$('#show-attendant').hide();
		$('#show-event').show();

		showAllEvent();
		
	})
	function showAllEvent(){
		$.ajax({
			url: 'eventList.php',
			type: 'POST',
			dataType:"json",
			success: function(event){
				console.log(event);
				tbody = $("tbody.event-list");
				tbody.empty();
				event.forEach(row=>{
					console.log(row);
					// day = row.date.slice(8, 10);
					// month = row.date.slice(5, 7);
					// year = row.date.slice(0, 4);
					// hour = row.date.slice(11, 13);
					// minute = row.date.slice(14, 16);
			        formatDay= moment(row.date).format('DD/MM/YYYY H:mm');
					tr = tbody.append("<tr id='list'></tr>").children().last();
					tr.append("<td scope='row' style='text-align: center;'>" + row.eventID + "</td>");
					tr.append("<td scope='row' style='text-align: center;'>" +formatDay+ "</td>");
					tr.append("<td scope='row'>" + row.eventName + "</td>");
					tr.append("<td scope='row'>" + row.location + "</td>");
					tr.append("<td scope='row' style='text-align: right;'>" + row.capacity + "</td>");
					tr.append("<td scope='row' style='text-align: right;'>" + row.price + "</td>");
					tr.append("<td scope='row'>" + row.type + "</td>");
					tr.append("<td scope='row'>" + row.orgName + "</td>");
				});
			}
		});
	}

});


