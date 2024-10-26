<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Event Management System</title>
    <link rel="shortcut icon" href="{{ asset('backend/assets/img/login.png')}}">

    <link rel="stylesheet" href="{{asset ('backend/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset ('backend/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset ('backend/assets/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset ('backend/assets/plugins/icons/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset ('backend/assets/plugins/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset ('backend/assets/plugins/icons/ionic/ionicons.css')}}">

    <link rel="stylesheet" href="{{asset ('backend/assets/css/style.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    @livewireStyles
</head>

<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">
    <div class="main-wrapper">
        <div class="header header-one">
            <div class="header-left header-left-one">
                <a href="{{ route('dashboard') }}" class="logo">
                    <img src="{{ asset('backend/assets/img/logo.png') }}" alt="Logo">
                </a>
                <a href="{{ route('dashboard') }}" class="white-logo">
                    <img src="{{ asset('backend/assets/img/logo.png') }}" alt="Logo">
                </a>
                <a href="{{ route('dashboard') }}" class="logo logo-small">
                    <img src="{{ asset('backend/assets/img/logo-small.png') }}" alt="Logo" width="30"
                        height="30">
                </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-bars"></i>
            </a>
            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>
            <ul class="nav nav-tabs user-menu">
                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img src="{{asset('backend/assets/img/logo-small.png')}}" alt="">
                            <span class="status online"></span>
                        </span>
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <a wire:navigate class="dropdown-item" href="{{ route('admin.logout') }}"><i data-feather="log-out" class="me-1"></i>
                            Logout</a>
                    </div>
                </li>
            </ul>
        </div>
