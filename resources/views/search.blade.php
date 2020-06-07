@extends('main')

@section('title', 'Search Field')

@section('content')

	<!-- <form class="form-inline" method="GET" action="/search" role="search">
	{{ csrf_field() }}

	    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="studentname">
	    <button class="btn btn-success" type="submit">Search</button>
	</form>
 -->
 	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  	<form class="form-inline" method="GET" action="/search">
		    <input class="form-control mr-sm-2" type="text" placeholder="Search">
		    <button class="btn btn-success" type="submit">Search</button>
	  	</form>
	</nav>

@endsection