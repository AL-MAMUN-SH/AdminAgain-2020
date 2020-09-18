<!DOCTYPE html>
<html lang="en">
<head>
    @include('Layout.Admin.head')
</head>

{{--HEADER--}}

<body class="nav-md">
   <!-- SIde Navbar -->
   @include('Layout.Admin._nav')
   <!-- SIde Navbar END -->
        <!-- /top navigation -->

        <!-- page content -->

        <div class="right_col" role="main">
            <!-- top tiles -->
            <div class="row" style="display: inline-block;" >
                @yield('toptitle')

            </div>
            <!-- /top tiles -->
              @yield('topcontent')

            <br />

            <div class="row">
               @yield('middlecon')


            </div>

             @yield('footercon')

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="text-center font-weight-bold">
              &copy; MUNMANALL - Bootstrap Admin Template by <strong>SITEMUN</strong>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->

@include('Layout.Admin._jsadd')

</body>
</html>
