@extends('employee.layout.structure')
@section('main_container')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Products</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row" align="center">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Cakeshop Products
                        </div>
                        <div class="panel-body" >
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Product Name</th>
                                            <th>Product Image</th>
                                            <th>Discount Price</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @if(!empty($data_product))
											@foreach($data_product as $d)
											<tr>
												<td>{{$d->id}}</td>
												<td>{{$d->name}}</td>
												<td><img src="{{url('/upload/products/'.$d->file)}}" width="50px"></td>
												<td>{{$d->d_price}}</td>
												<td>
													<a href="" class="btn btn-success me-1">{{$d->status}}</a>
													<a href="{{url('/manage_cust/'.$d->id)}}" class="btn btn-danger me-1">Delete</a>		
													<a href="" class="btn btn-primary me-1">Edit</a>
												</td>
											</tr>
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
                     <!-- End  Kitchen Sink -->
                </div>
                
                </div>
            </div>
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
@endsection