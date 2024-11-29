<!DOCTYPE html>
<html lang="en">

@include ('partials.header')

<body class="g-sidenav-show   bg-gray-100">
<div class="min-height-300 bg-dark position-absolute w-100"></div>
{{--sidebar--}}
@include ('partials.sidebar')
{{--end sidebar--}}
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">

                <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
            </nav>

            <ul class="navbar-nav  justify-content-end">

                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                        </div>
                    </a>
                </li>

                <li class="nav-item dropdown pe-2 d-flex align-items-center">

                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                    </ul>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">

            <div class="row">
                <div class="container-fluid py-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                @section('content')

                                    @show
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <footer class="footer pt-3  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="" class="font-weight-bold" target="_blank">Tim Pengabdian ITSPKU</a>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
</main>

<!--   Core JS Files   -->
<script src="{{asset('adminpage')}}/assets/js/core/popper.min.js"></script>
<script src="{{asset('adminpage')}}/assets/js/core/bootstrap.min.js"></script>
<script src="{{asset('adminpage')}}/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="{{asset('adminpage')}}/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="{{asset('adminpage')}}/assets/js/plugins/chartjs.min.js"></script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('adminpage')}}/assets/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>
