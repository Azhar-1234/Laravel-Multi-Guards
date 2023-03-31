<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

    <title>User Dashboard</title>
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-6 offset-md-3" style="margin-top: 45px">
  				<h4 style="padding:5px;" class="bg-success  text-center">User Dashboard</h4>
  				<table class="table table-striped table-inverse table-responsive">
  					<thead class="thead-inverse">
  						<tr>
  							<th>Name</th>
  							<th>Email</th>
  							<th>Phone</th>
  							<th>Action</th>
  						</tr>
  					</thead>
  					<tbody>
  						<tr>
  							<td>{{Auth::guard('admin')->user()->name}}</td>
  							<td>{{Auth::guard('admin')->user()->email}}</td>
  							<td>{{Auth::guard('admin')->user()->phone}}</td>
  							<td>
  								<a href="{{route('admin.logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
  								<form action="{{route('admin.logout')}}" method="post" class="d-none" id="logout-form">@csrf</form>
  						</td>
  						</tr>
  					</tbody>
  				</table>
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