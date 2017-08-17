$("#slc_firstmenu").click(event => {
	$.get(`http://www.altavision.co/secondsmenus/${event.target.value}`, function(res, sta){
		$("#slc_secondmenu").empty();
		$("#slc_thirdmenu").empty();
		$("#div_second_menu").css({'display':'none'});
		$("#div_third_menu").css({'display':'none'});
		res.forEach(element => {
			$("#slc_secondmenu").append(`<option value=${element.id}> ${element.name} </option>`);
			$("#div_second_menu").css({'display':'block'});
		});
	});
});
$("#slc_secondmenu").click(event => {
	$.get(`http://www.altavision.co/thirdsmenus/${event.target.value}`, function(res, sta){
		$("#slc_thirdmenu").empty();
		$("#div_third_menu").css({'display':'none'});
		res.forEach(element => {
			$("#slc_thirdmenu").append(`<option value=${element.id}> ${element.name} </option>`);
			$("#div_third_menu").css({'display':'block'});
		});
	});
});
