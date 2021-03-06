<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>SIKULER</title>
     <!-- End layout styles -->
     <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" />
    @include('include.style')
</head>

<body>
    <div class="container-scroller">
        @include('include.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('include.navbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper pb-0">
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('include.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('include.script')
</body>

</html>
