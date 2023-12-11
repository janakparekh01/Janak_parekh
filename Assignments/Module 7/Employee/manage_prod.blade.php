@extends('admin.layout.structure')
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
											<th>Main Price</th>
											<th>Description</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
									if(!empty($data_products))
									{
										foreach($data_products as $d)
										{
										?>
                                        <tr>
                                            <td><?php echo $d->p_id;?></td>
                                            <td><?php echo $d->product_name;?></td>
                                            <td><img src="../upload/product/<?php echo $d->file;?>" height="50" width="50"></td>
                                            <td><?php echo $d->discount_price;?></td>
											<td><?php echo $d->main_price;?></td>
											<td><?php echo $d->description;?></td>
											<td><a href="" class="btn btn-danger me-1">Delete</a>
												<a href="" class="btn btn-primary me-1">Edit</a></td>
                                        </tr>
									<?php
										}
									}
									else
									{
									?>
										<tr>
											<td>DATA NOT FOUND</td>
										</tr>
									<?php
									}
									?>
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