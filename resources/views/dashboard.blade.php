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
                <!-- if breadcrumb is single--><span>Home</span>
              </li>
              <li class="breadcrumb-item active"><span>Dashboard</span></li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-primary">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">26K <span class="fs-6 fw-normal">(-12.4%
                        <svg class="icon">
                          <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-arrow-top') }}"></use>
                        </svg>)</span></div>
                    <div>Users</div>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg class="icon">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-options') }}"></use>
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                  </div>
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                  <canvas class="chart" id="card-chart1" height="70"></canvas>
                </div>
              </div>
            </div>
        </div>
      </div>
      @extends('layout.footer')