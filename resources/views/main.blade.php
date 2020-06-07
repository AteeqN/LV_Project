<!DOCTYPE html>
<html>
<head>
	<title> @yield('title')</title>
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" href="">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script>
		
		// Restricts input for each element in the set of matched elements to the given inputFilter.
		(function($) {
		  $.fn.inputFilter = function(inputFilter) {
		    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
		      if (inputFilter(this.value)) {
		        this.oldValue = this.value;
		        this.oldSelectionStart = this.selectionStart;
		        this.oldSelectionEnd = this.selectionEnd;
		      } else if (this.hasOwnProperty("oldValue")) {
		        this.value = this.oldValue;
		        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
		      } else {
		        this.value = "";
		      }
		    });
		  };
		}(jQuery));


		// Install input filters.
		$("#intTextBox").inputFilter(function(value) {
		  return /^-?\d*$/.test(value); });
		$("#uintTextBox").inputFilter(function(value) {
		  return /^\d*$/.test(value); });
		$("#intLimitTextBox").inputFilter(function(value) {
		  return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 500); });
		$("#floatTextBox").inputFilter(function(value) {
		  return /^-?\d*[.,]?\d*$/.test(value); });
		$("#currencyTextBox").inputFilter(function(value) {
		  return /^-?\d*[.,]?\d{0,2}$/.test(value); });
		$("#latinTextBox").inputFilter(function(value) {
		  return /^[a-z]*$/i.test(value); });
		$("#hexTextBox").inputFilter(function(value) {
		  return /^[0-9a-f]*$/i.test(value); });

	</script>

	<!-- inline Style  -->

		<style>
			.button {
			  background-color: #6537B9; /* Green */
			  border: none;
			  color: white;
			  padding: 15px 32px;
			  text-align: center;
			  text-decoration: none;
			  display: inline-block;
			  font-size: 14px;
			  margin: 4px 2px;
			  cursor: pointer;
			  border-radius: 5px;
			}

			.button3 {width: 100%;}
		</style>

	<!-- end inline Style -->


</head>
<body>
	<div class="container-fluid">
		
		<h1> Main Page </h1>
		<h4> <a href="/create"> Add User </a></h4>
		<h4> <a href="/search"> Search From Twitter API </a></h4>

		@yield('content')
	</div>
	





	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>