<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

    <title>User Register</title>
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-4 offset-md-4" style="margin-top: 45px">
  				<h4 style="border-bottom: 1px solid gray;padding:5px;">User Register</h4>
			    <form action="{{route('user.create')}}" method="post" autocomplete="off">
			    	@if(Session::get('success'))
			    		<div class="alert alert-success">{{Session::get('success')}}</div>
			    	@endif

			    	@if(Session::get('fail'))
			    		<div class="alert alert-danger">{{Session::get('fail')}}</div>
			    	@endif

			    	@csrf
				  <div class="form-group">
				    <label for="exampleInputName">Name</label>
				    <input type="text"  class="form-control" name="name" placeholder="Enter Name" value="{{old('name')}}">
				    <span class="text-danger">@error('name') {{$message}} @enderror</span>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="text"  class="form-control" name="email" placeholder="Enter email" value="{{old('email')}}">
				    <span class="text-danger">@error('email') {{$message}} @enderror</span>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" name="password" placeholder="Password" value="{{old('password')}}">
				    <span class="text-danger">@error('password') {{$message}} @enderror</span>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputConfirmPassword1">Confirm Password</label>
				    <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" value="{{old('cpassword')}}">
				    <span class="text-danger">@error('cpassword') {{$message}} @enderror</span>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
				<br>
				<a href="{{route('user.login')}}">Already Have An Account</a>
  			</div>
  		</div>
  	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>