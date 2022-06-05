@extends('admin/sidebar')
@section('content')

<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                         <h1 class="page-title">ABOUT-US</h1>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="{{'addaboutt'}}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add-About-Us</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr class="h5"  class="font-weight-bold">
                                        <th>id</th>
										<td>Image</td>
										<th>Heading </th>
										<th>Paragraph</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
                                        <td>1</td>
										<td><img width="28" height="28" src="/admin/images/layout_img/users.jpg" class="rounded-circle m-r-5" alt=""></td>
                                        <td>heading</td>
										<td>paragraph</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>

													<a href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
							  
									</tbody>

                              

 @endsection                                   
