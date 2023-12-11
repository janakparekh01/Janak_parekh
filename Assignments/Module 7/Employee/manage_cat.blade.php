@extends('admin.layout.structure')
@section('main_container')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Categories</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row" align="center">
                <div class="col-md-6">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Cakeshop Categories
                        </div>
                        <div class="panel-body" >
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Category Name</th>
                                            <th>Category Image</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									if(!empty($data_category))
									{
										foreach($data_category as $d)
										{
										?>
                                        <tr>
                                            <td><?php echo $d->cat_id;?></td>
                                            <td><?php echo $d->cat_name;?></td>
                                            <td><img src="../upload/category/<?php echo $d->cat_img?>" width="50" height="50"></td>
											<td><a href="" class="btn btn-danger me-1">Delete</a>
												<a href="editcat?editcat_id=<?php echo $d->cat_id?>" class="btn btn-primary me-1">Edit</a></td>
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