<!DOCTYPE html>
<html lang="en">

<head>
   @include('Layout.Admin._head')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
   @include('Layout.Admin._nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       @include('Layout.Admin._sidenav')
        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        @include('Layout.Admin.message')
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="font-weight-bold mb-0">RoyalUI Dashboard</h4>
                            </div>
                        </div>
                        {{$title}}

                    </div>
                </div>

                @yield('allconhere')
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('Layout.Admin._footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
@include('Layout.Admin._js')
<!-- End custom js for this page-->
</body>

</html>

