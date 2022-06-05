@extends('admin/sidebar')
@section('content')

<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                         <h1 class="page-title">Contactus</h1>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="{{'addcontactus'}}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Contactus</a>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr class="h5"  class="font-weight-bold">
                                        <th>id</th>
										<th>Full Name</th>
										<th>Phone Number</th>
										<th>Email Address</th>
										<th>Massage</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
								@foreach($post as $posts)
									<tr>
                                        <td>{{$posts['id']}}</td>
                                        <td>{{$posts['name']}}</td>
										<td>{{$posts['phone']}}</td>
										<td>{{$posts['email']}}</td>
										<td>{{$posts['massage']}}</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="edit_contactus/{{$posts['id']}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>

													<a href="delete_contactus/{{$posts['id']}}" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
							   @endforeach
									</tbody>

                              

 @endsection                                   
