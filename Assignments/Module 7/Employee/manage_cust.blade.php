@extends('admin.layout.structure')
@section('main_container')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Customers</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row" align="center">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Cakeshop Customers
                        </div>
                        <div class="panel-body" >
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
											<th>Gender</th>
											<th>Languages</th>
											<th>File</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
									if(!empty($data_customers))
									{
										foreach($data_customers as $d)
										{
										?>
                                        <tr>
                                            <td><?php echo $d->uid;?></td>
                                            <td><?php echo $d->name;?></td>
                                            <td><?php echo $d->email;?></td>
                                            <td><?php echo $d->mobile;?></td>
											<td><?php echo $d->gender;?></td>
											<td><?php echo $d->languages;?></td>
											<td><?php echo $d->file;?></td>
											<td><a href="delete?delcustomers_id=<?php echo $d->uid;?>" class="btn btn-danger me-1">Delete</a>
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