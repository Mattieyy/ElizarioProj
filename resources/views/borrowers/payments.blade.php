@extends('layout.header')
<body>
    <div class="sidebar sidebar-fixed" style="background-color: #0a7a7c;" id="sidebar">
    <!--LOGO HEREEE--->
    <div class="sidebar-brand d-none d-md-flex">
          <img src="{{ asset('img/apple.jpg') }}" alt="" width="30px" height="30px" style="border-radius: 100%; align-items: center;"/>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="{{ asset('asset/brand/coreui.svg#signet') }}"></use>
        </svg>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
      <li class="nav-item"><a class="nav-link" style="color: #ffffff;"  href="{{ route('dashboard') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
            </svg> Dashboard</a></li>
        <li class="nav-title">USER MANAGEMENT</li>
        <li class="nav-item"><a class="nav-link" style="color: #ffffff;" href="{{ route('users') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
            </svg> Users</a></li>
        <li class="nav-title">Loan Management</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle"  style="color: #ffffff;" href="#">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle') }}"></use>
            </svg> Loan</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" style="color: #ffffff;" href="{{ route('loans')}}"><span class="nav-icon"></span>Loans </a></li>
            <li class="nav-item"><a class="nav-link" style="color: #ffffff;" href="{{ route('loantypes')}}"><span class="nav-icon"></span> Loan Types</a></li>
            <li class="nav-item"><a class="nav-link" style="color: #ffffff;" href="{{ route('loanplans')}}"><span class="nav-icon"></span> Loan Plans</a></li>
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" style="color: #ffffff;" href="#">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-cursor') }}"></use>
            </svg> Borrowers</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{ route('borrowers')}}"><span class="nav-icon"></span> Borrowers</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('payment')}}"><span class="nav-icon"></span> Payment</a></li>
          </ul>
        </li>
    </div>
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
            </svg>
          </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="{{ asset('asset/brand/coreui.svg#full') }}"></use>
            </svg></a>
          <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
          </ul>
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
                </svg></a></li>
          </ul>
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('assets/img/avatars/8.jpg') }}" alt="user@email.com"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Account</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
				  <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Settings</div>
                </div>
                
                <a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                  </svg> Profile</a>
                  
                  <a class="dropdown-item" href="{{ route('logout') }}">
                  <svg class="icon me-2">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                  </svg> Logout</a>

              </div>
            </li>
          </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>User Management</span>
              </li>
              <li class="breadcrumb-item active"><span>Users</span></li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="row">
            <!---- content starts here --->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Users</h1>
                    </div>
					<button class="mb-2 btn btn-lg btn-success" href="#" data-toggle="modal" data-target="#addModal"><span class="fa fa-plus"></span> Add User</button>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
										
                                        <tr>
                                            <!-- <td></td>
                                            <td></td>
                                            <td></td>
                                            <td> -->
												<!-- <div class="dropdown">
													<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Action
													</button>
													<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
														<a class="dropdown-item bg-warning text-white" href="#" data-toggle="modal" data-target="#updateModal"><i class="fa fa-edit fa-1x"></i> Edit</a>
														
													</div>
												</div>
												 
												
											</td> -->
                                        </tr>
										
										
										<!-- Update User Modal -->
										<div class="modal fade" id="updateModal" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog">
												<form method="POST" action="updateUser.php">
													<div class="modal-content">
														<div class="modal-header bg-warning">
															<h5 class="modal-title text-white">Edit User</h5>
															<button class="close" type="button" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">×</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="form-group">
																<label>Username</label>
																<input type="text" name="username" value="" class="form-control" required="required" />
																<input type="hidden" name="user_id" value=""/>
															</div>
															<div class="form-group">
																<label>Password</label>
																<input type="password" name="password" value="" class="form-control" required="required" />
															</div>
															<div class="form-group">
																<label>Firstanme</label>
																<input type="text" name="firstname" value="" class="form-control" required="required" />
															</div>
															<div class="form-group">
																<label>Lastname</label>
																<input type="text" name="lastname" value="" class="form-control" required="required" />
															</div>
														</div>
														<div class="modal-footer">
															<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
															<button type="submit" name="update" class="btn btn-warning">Update</a>
														</div>
													</div>
												</form>
											</div>
										</div>
										
										
										
										<!-- Delete User Modal -->
										
										<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header bg-danger">
														<h5 class="modal-title text-white">System Information</h5>
														<button class="close" type="button" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
													</div>
													<div class="modal-body">Are you sure you want to delete this record?</div>
													<div class="modal-footer">
														<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
														<a class="btn btn-danger" href="deleteUser.php?user_id=&user=">Delete</a>
													</div>
												</div>
											</div>
										</div>
										
										
										
										
							
                                    </tbody>
                                </table>
                            </div>
						</div>
                       
                    </div>
				</div>
            <!---- content end here --->
            </div>
        </div>
      </div>
      @extends('layout.footer')