
 <!-- latest jquery-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <!-- Bootstrap js-->
<script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- scrollbar js-->
<script src="{{asset('assets/js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('assets/js/scrollbar/custom.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('assets/js/config.js')}}"></script>
<!-- Plugins JS start-->
<script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
<script id="menu" src="{{asset('assets/js/sidebar-menu.js')}}"></script>
<script src="{{ asset('assets/js/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick.js') }}"></script>
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
@yield('script')

@if(Route::current()->getName() != 'popover') 
	<script src="{{asset('assets/js/tooltip-init.js')}}"></script>
@endif
<script>
	var curs_outer = document.querySelector(".cursor_outer");
	var curs_track = document.querySelector(".cursor_track");

	// Function to update cursor position including scroll offset
	function updateCursorPosition(e) {
		var mouseX = e.clientX;
		var mouseY = e.clientY;

		// Adjust the cursor position for scroll offset
		mouseX += window.scrollX;
		mouseY += window.scrollY;

		curs_outer.style.left = mouseX + "px";
		curs_outer.style.top = mouseY + "px";
		curs_track.style.left = mouseX + "px";
		curs_track.style.top = mouseY + "px";
	}
	// Event listeners for mousemove and mousedown
	window.addEventListener("mousemove", function (e) {
		updateCursorPosition(e);
	});

	window.addEventListener("mousedown", function (e) {
		updateCursorPosition(e);

		curs_outer.classList.add("clicked");

		setTimeout(function () {
			curs_outer.classList.remove("clicked");
		}, 400); // Adjust the delay to match the animation duration
	});

	//on right click it will reload window
    document.oncontextmenu = rightClick;
    function rightClick(e) {
        e.preventDefault();
		location.reload();
    }
</script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('assets/js/script.js')}}"></script>
{{-- <script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script> --}}


{{-- @if(Route::current()->getName() == 'index') 
	<script src="{{asset('assets/js/layout-change.js')}}"></script>
@endif --}}

@if(Route::currentRouteName() == 'index')
<script>
	new WOW().init();
</script>
@endif
