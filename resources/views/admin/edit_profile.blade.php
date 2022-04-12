@extends('admin/header')

@section('container')
<div class="content-body">
           
			<div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Manage Profile</a></li>
						
					</ol>
                </div>
            <div class="row">
                    <!-- Column starts -->
                    <div class="col-xl-8">
                        <div class="card">
                            
                            <div class="card-body">
                                <!-- Default accordion -->
                
								<div class="accordion accordion-primary" id="accordion-one">
								  <div class="accordion-item">
									<div class="accordion-header  rounded-lg" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne"   aria-expanded="true" role="button">
										<span class="accordion-header-icon"></span>
									  <i class="fa fa-cog fa-spin"></i> EDIT DETAILS
									  <span class="accordion-header-indicator"></span>
									</div>
									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion-one">
									  <div class="accordion-body-text">
										 <form action="{{asset('admin/update_profile')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                       @foreach ($admins as $list)
                                           
                                      
                                         <div class="mb-3">
                                            <label class="mb-1"><strong>Admin Name</strong></label>
                                            <input type="text" class="form-control" name="name" value="{{$list->name}}" required>
                                            <input type="hidden"  name="id" value="{{$list->id}}" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Admin Email</strong></label>
                                           
                                            <input type="email" class="form-control" name="email" value="{{$list->email}}" required>
                                        </div>
                                        <div class="mb-3">
                                        <label class="mb-1"><strong>Admin Image</strong></label>
                                        
                                            <input id="image" name="image" type="file" class="form-control cc-cvc" value="" >
                                                <div class="mb-3">
                                                    <img src="{{asset('assets/images/admin')}}/{{$list->image}}" id="preview-image-before-upload" class="img-thumbnail" style="max-height:200px;">
                                                </div>

                                        
                                    </div>
                                    
                                        
                                        @endforeach
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">save</button>
                                        </div>
                                         
                                    </form>
									  </div>
									</div>
								  </div>
								 
								  
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            
                            <div class="card-body">
                                <!-- Default accordion -->
                
								<div class="accordion accordion-primary" id="accordion-one">
								  <div class="accordion-item">
									<div class="accordion-header  rounded-lg" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne"   aria-expanded="true" role="button">
										<span class="accordion-header-icon"></span>
									  <i class="fa fa-list"></i> CHANGE PASSWORD
									  <span class="accordion-header-indicator"></span>
									</div>
									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion-one">
									  <div class="accordion-body-text">
										 <form  id="admin_password" action="{{asset('admin/change_password')}}" method="POST" enctype="multipart/form-data">
                                         @csrf
                                         @method('PUT')
                                      
                                         <div class="mb-3">
                                            <label class="mb-1"><strong>Password *</strong></label>
                                           
												
                                                <input type="password" class="form-control" id="password" name="password" >
                                            </div>
                                         <div class="mb-3">
                                            <label class="mb-1"><strong>Confirm Password * </strong></label>
                                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" >
                                         </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">save</button>
                                        </div>
                                         
                                    </form>
									  </div>
									</div>
								  </div>
								 
								  
								</div>
                            </div>
                        </div>
                    </div>
 </div>
            </div></div>
 

@endsection