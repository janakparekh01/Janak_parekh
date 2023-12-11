<html>
	<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	
	<body>
		<form action="{{url('/index')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Title</label>
		  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter The Title">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlTextarea1" class="form-label">Content</label>
		  <textarea class="form-control" id="exampleFormControlTextarea1" rows="13"></textarea>
		</div>
		<div>
		<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		</form>
	</body>
</html>