<html>

<head>
	<title>Show Images</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>  
  <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Images</h1>
                        
                    </div>
                </div>
 
              
            <div class="row">
                <div class="col-md-12">
            
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Images
                        </div>
                        <div class="panel-body table-responsive">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
											<th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                   					@if(!empty($data_upload))
											@foreach($data_upload as $d)
											<tr>
												<td><img src="{{url('/upload/'.$d->file)}}" width="50px"></td>
											@endforeach
											
									@else	
											<tr>
												<td> DATA NO FOUND </td>
											</tr>	
									@endif	
										
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
          
            </div>
      
               
            </div>
      
        </div>
     
    </div></body>
	
</html>