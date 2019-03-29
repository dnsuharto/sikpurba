@extends('layout')

@section('body')
<div class="container" style="margin-top: 20px; text-align: center;">
	<div class="card" style="width: 18rem; justify-content: center; margin: 80px auto;">
	  <div class="card-body">
	    <h5 class="card-title" style="text-align: center;">LOGIN</h5>
	   		<form style="text-align: left;" action="{{ action('LoginController@loginDo') }}" method="post">
		    	@csrf
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>

			  @if(Session::has('msg'))
			  <div style="color: red; font-size: 0.9em; margin-bottom: 20px; margin-top: -20px;">
			  	{{ session('msg') }}
			  </div>
			  @endif

			  <div style="text-align: center;">
				  <button type="submit" class="btn btn-primary">Login</button>
			  </div>
			</form>
	  </div>
	</div>
</div>
@endsection