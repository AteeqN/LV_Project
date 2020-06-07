@extends('main')

@section('title', 'User Create')

@section('content')

<div class="container">
	<!-- <p> Create User Page </p> -->
	<!-- Control the column width, and how they should appear on different devices -->
	<!-- <div class="container"> -->
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<div class="border" style="padding-left: 20px; padding-bottom: 10px; padding-right: 20px; background-color: #F2F2F4; border-radius: 10px;">
			<div class="row">
				<div class="container" style="text-align: center;">
					<div class="container" style="margin-top: 5px; color: #0087ff; font-size: 28px; font-weight: 700;"> 
						Create you Free Profile
					</div>
					<div class="container" style="margin-top: 5px; color: #0065bd; font-size: 14px; font-weight: 700"> 
						(Step 1 of 2) 
					</div>	
				</div>
				
			  	<div class="col-sm-12" style="background-color:white;">
			  		<form method="POST" action="/">
			  			
			  			{{csrf_field()}}

						<div class="form-group">
						    <label for="FirstName">
						    	First Name: <span class="text-danger">*</span>
						    </label>
						    <input type="fname" name="fname" class="form-control" placeholder="Enter name" id="fname">
						</div>

						<div class="form-group">
						    <label for="Lastname">
						    	Last Name: <span class="text-danger">*</span>
						    </label>
						    <input type="lname" name="lname" class="form-control" placeholder="Enter last name" id="lname">
						</div>

						<div class="form-group">
						    <label for="email">
						    	Email: <span class="text-danger">*</span>
						    </label>
						    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
						</div>
						
						<div class="form-group">
						    <label for="PhoneNumber">
						    	Phone Number: <span class="text-danger">*</span>
						    </label>
						    <input type="text" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{7}">
						</div>

						<div class="form-group">
						    <label for="Address">
						    	Address: <span class="text-danger">*</span>
						    </label>
						    <input type="adress" name="addressdetail" class="form-control" placeholder="Enter Address" id="addressdetail">
						</div>

						<div class="form-group">
						    <label for="pwd">
						    	Password: <span class="text-danger">*</span>
						    </label>
						    <input type="intTextBox" name="pwd" class="form-control" placeholder="Enter password" id="pwd">
						</div>

						<div class="form-group">
						    <label for="conpwd">
						    	Confirm Password: <span class="text-danger">*</span>
						    </label>
						    <input type="confirmpassword" name="conpwd" class="form-control" placeholder="Enter confirm password" id="conpwd">
						</div>
						
						<!-- <div class="form-group form-check">
						    <label class="form-check-label">
						      <input class="form-check-input" type="checkbox"> Remember me
						    </label>
						</div>
 -->
						<button type="submit" class="button button3">
							AGREE & JOIN 
						</button>
						
					</form>
				</div>
			</div>
		</div>
</div>

@endsection