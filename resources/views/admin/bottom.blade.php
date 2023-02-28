<!-- Scripts -->
<script src="{{asset('public/admin/scripts/chosen.min.js')}}"></script>
<script src="{{asset('public/admin/scripts/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('public/admin/scripts/slick.min.js')}}"></script>
<script src="{{asset('public/admin/scripts/rangeslider.min.js')}}"></script>
<script src="{{asset('public/admin/scripts/magnific-popup.min.js')}}"></script>
<script src="{{asset('public/admin/scripts/jquery-ui.min.js')}}"></script>
<script src="{{asset('public/admin/scripts/mmenu.js')}}"></script>
<script src="{{asset('public/admin/scripts/tooltips.min.js')}}"></script>
<script src="{{asset('public/admin/scripts/color_switcher.js')}}"></script>
<script>
(function($) {
    try {
        var jscr1 = $('.js-scrollbar');
        if (jscr1[0]) {
            const ps1 = new PerfectScrollbar('.js-scrollbar');
        }
    } catch (error) {
        console.log(error);
    }
})(jQuery);
</script>
<!-- Style Switcher -->
<div id="color_switcher_preview">
    <h2>Choose Your Color <a href="#"><i class="fa fa-gear fa-spin (alias)"></i></a></h2>
    <div>
        <ul class="colors" id="color1">
            <li><a href="#" class="stylesheet"></a></li>
            <li><a href="#" class="stylesheet_1"></a></li>
            <li><a href="#" class="stylesheet_2"></a></li>
            <li><a href="#" class="stylesheet_3"></a></li>
            <li><a href="#" class="stylesheet_4"></a></li>
            <li><a href="#" class="stylesheet_5"></a></li>
        </ul>
    </div>
</div>

<!-- Maps --> 
<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script> 
<script src="{{asset('public/admin/scripts/infobox.min.js')}}"></script> 
<script src="{{asset('public/admin/scripts/markerclusterer.js')}}"></script> 
<script src="{{asset('public/admin/scripts/maps.js')}}"></script>
<script>
$(".utf_opening_day.utf_js_demo_hours .utf_chosen_select").each(function() {
	$(this).append(''+
        '<option></option>'+
        '<option>Closed</option>'+
        '<option>1 AM</option>'+
        '<option>2 AM</option>'+
        '<option>3 AM</option>'+
        '<option>4 AM</option>'+
        '<option>5 AM</option>'+
        '<option>6 AM</option>'+
        '<option>7 AM</option>'+
        '<option>8 AM</option>'+
        '<option>9 AM</option>'+
        '<option>10 AM</option>'+
        '<option>11 AM</option>'+
        '<option>12 AM</option>'+
        '<option>1 PM</option>'+
        '<option>2 PM</option>'+
        '<option>3 PM</option>'+
        '<option>4 PM</option>'+
        '<option>5 PM</option>'+
        '<option>6 PM</option>'+
        '<option>7 PM</option>'+
        '<option>8 PM</option>'+
        '<option>9 PM</option>'+
        '<option>10 PM</option>'+
        '<option>11 PM</option>'+
        '<option>12 PM</option>');
});
</script> 
<script> 
jQuery(document).ready(function($) {
	let url = "{{asset('public/web/')}}";
	console.log(url);
	$("#color_switcher_preview .stylesheet" ).click(function(){
		$("#colors" ).attr("href", "../web/css/colors_version/style.css" );
		return false;
	});

	$("#color_switcher_preview .stylesheet_1" ).click(function(){
		$("#colors" ).attr("href", "../../web/css/colors_version/stylesheet_1.css" );
		return false;
	});
	
	$("#color_switcher_preview .stylesheet_2" ).click(function(){
		$("#colors" ).attr("href", "css/colors_version/stylesheet_2.css" );
		return false;
	});
	
	$("#color_switcher_preview .stylesheet_3" ).click(function(){
		$("#colors" ).attr("href", "css/colors_version/stylesheet_3.css" );
		return false;
	});
	
	$("#color_switcher_preview .stylesheet_4" ).click(function(){
		$("#colors" ).attr("href", "css/colors_version/stylesheet_4.css" );
		return false;
	});
	
	$("#color_switcher_preview .stylesheet_5" ).click(function(){
		$("#colors" ).attr("href", "css/colors_version/stylesheet_5.css" );
		return false;
	});
	
	$("#color_switcher_preview .stylesheet_6" ).click(function(){
		$("#colors" ).attr("href", "css/colors_version/stylesheet_6.css" );
		return false;
	});	
	
	$("#color_switcher_preview h2 a").click(function(e){
		e.preventDefault();
		var div = $("#color_switcher_preview");
		console.log(div.css("right"));
		if (div.css("right") === "-210px") {
			$("#color_switcher_preview").animate({
				right: "0px"
			}); 
		} else {
			$("#color_switcher_preview").animate({
				right: "-210px"
			});
		}
	});

	$(".colors li a").click(function(e){
		e.preventDefault();
		$(this).parent().parent().find("a").removeClass("active");
		$(this).addClass("active");
	});
	
	$("#reset a").click(function(e){
		e.preventDefault();
		$(".colors li a" ).removeClass("active");
		$("#colors" ).attr("href", "css/colors/style.css" );
		$(window).resize();
	});
	
});
</script> 

<script src="{{asset('public/admin/scripts/dropzone.js')}}"></script>
</body>

</html>