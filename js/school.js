$(document).ready(function(){
	$("#sidebar-toggle, #glass").on("click", function(){
		$("#sidebar").toggle();
		$("#glass").toggle();
	});
});

$(function() {

	/*** Side Bar ***/
	var url = location.href;

	$("#nav a").each(function(){
		if(url.includes($(this).attr("href").substr(25).split("/")[0])){
			$(this).addClass("active");
		}
	});

	function sidebar(url){
		if(url.includes("staff")){
			var content = "<a class='sidebar-item' href='http://greened.ga/school/staff/profiles'>Profiles</a><a class='sidebar-item' href='http://greened.ga/school/staff/attendance'>Attendance</a><a class='sidebar-item' href='http://greened.ga/school/staff/salaries'>Salaries</a><a class='sidebar-item' href='http://greened.ga/school/staff/hiring'>Hiring</a><a class='sidebar-item' href='http://greened.ga/school/staff/chat'>Chat</a>";
			$("#sidebar").html(content);
		}
		else if(url.includes("students")){
			var content = "<a class='sidebar-item' href='http://greened.ga/school/students/profiles'>Profiles</a><a class='sidebar-item' href='http://greened.ga/school/students/attendance'>Attendance</a><a class='sidebar-item' href='http://greened.ga/school/students/fees'>Fees</a><a class='sidebar-item' href='http://greened.ga/school/students/admission'>Admission</a><a class='sidebar-item' href='http://greened.ga/school/students/chat'>Chat</a>";
			$("#sidebar").html(content);
		}
		$("#sidebar .sidebar-item").each(function(){
			if(url.includes($(this).attr("href"))){
				$(this).addClass("current");
			}
		});
	}
	sidebar(url);
	/*** Side Bar ***/

	/*** Dynamic Pages ***/
	if (Modernizr.history) {

		var $mainBody = $("#main");

		//When a link is clicked
		$(document).on("click", "a", function(event){
			event.preventDefault();
			_href = $(this).attr("href");
			history.pushState(null, null, _href);

			link = _href.substr(17);
			loadContent(link);

			//Change current button in navigation
			if($(this).hasClass("nav-item")){
				$(".nav-item").removeClass("active");
				$("#nav a[href$='" + link + "']").addClass("active");
				sidebar(_href);
			}
			else if($(this).hasClass("sidebar-item")){
				$(".sidebar-item").removeClass("current");
				$("#sidebar a[href$='" + link + "']").addClass("current");
			}
		});

		//load the new content
		function loadContent(href) {
			$mainBody.fadeOut(200, function() { // fade out the content of the current page
				url = href.split("/");
				if(url.length == 4 || url.length == 5){
					if(url.length == 4){
						url[url.length - 2] = url[url.length - 2] + "/main";
					}else{
						url[url.length - 3] = url[url.length - 3] + "/main";
						url.pop();
					}
					var link = "http://greened.ga" + url.join("/") + ".php";
					$.post(link, function(content) { 
						$mainBody.html(content).fadeIn(200);
					});
				}
				else if(url.length == 6 || url.length == 7){
					var stype = url[4];
					var uid = url[5];
					url[4] = "main.php";
					var link = url.join("/");
					link = link.substr(0,link.indexOf("main.php")+8);
					$.get(link, {stype:stype,uid:uid}, function(content) { 
						$mainBody.html(content).fadeIn(200);
					});
				}
			});
		}

		//Handle 'back' and 'forward' buttons
		$(window).bind('popstate', function(){
		   _link = location.href;
		   _link = _link.substr(17);
		   loadContent(_link);
		});

	}
	/*** Dynamic Pages ***/

});