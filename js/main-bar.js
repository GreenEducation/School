$(document).ready(function(){
	
	//Profile-Type Selector
	$("input[name=profile-type]").on("change", function(){
		var type = $(this).attr("id"),
		url = location.pathname.split( '/' ),
		link;
		if(url[url.length - 1]==""){
			link = url[url.length - 2];
		}
		else{
			link = url[url.length - 1];
		}

		$.post('http://greened.ga/school/staff/ajax/'+link+'.php', {type: type}, function(data){
			$("#main-body").children().html(data);
			if(type == "non-teaching"){
				$("#staff-sort").attr('disabled', true);
				$("#staff-sort").val("name");
			}else{
				$("#staff-sort").attr('disabled', false);
			}
		});
	});

	//Overwrite :contains
	$.expr[":"].contains = $.expr.createPseudo(function(arg) {
		return function( elem ) {
			return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
		};
	});

	//Search
	$("#search").on("keyup", function(){
		$(".users").css("display","flex")
		var search = $(this).val();
		if(search != ""){
			$(".users:not(:contains("+search+"))").css("display","none");
		}
	});

	//Sort
	$("#staff-sort").on("change", function(){
		var sortType = "data-" + $("#staff-sort").val();
		var getSorted = $(
			$(".users").toArray().sort(function(a, b){
				var aVal = (a.getAttribute(sortType)),
				bVal = (b.getAttribute(sortType));
				return aVal > bVal;
			})
		).appendTo($("#main-body").children());
		//$("#main-body").html( getSorted );//alternate method
	});

});