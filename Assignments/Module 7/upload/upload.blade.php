<html>
<head>
	<title>Image uploading</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
	

<body>
	<form method="post" enctype="multipart/form-data" action="{{url('/upload')}}">
		@csrf
		<div class="container">
			<div class="form-group mt-2">
				<label for="file"></label>
				<input type="file" name="image" id="" class="form-control" placeholder="">
			</div>
			<button class="btn btn-primary">Upload</button>
		</div>
		
	</form>
</body>
</html>