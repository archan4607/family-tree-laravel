<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<!-- Bootstrap js-->
<script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- scrollbar js-->
<!-- Sidebar jquery-->
<script src="{{asset('assets/js/config.js')}}"></script>
<!-- Plugins JS start-->
@yield('script')
<!-- Plugins JS Ends-->
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
</script>
<!-- Theme js-->
<script src="{{asset('assets/js/script.js')}}"></script>
<!-- Plugin used-->  