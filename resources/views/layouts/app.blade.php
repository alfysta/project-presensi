@include('layouts.components.head')

<body class=" layout-fluid">
    <script src="{{ asset('vendor/assets/dist/js/demo-theme.min.js?1674944800') }}"></script>
    <div class="page">
        <!-- Sidebar -->
        @include('layouts.components.sidebar')
        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <h2 class="page-title">
                                @yield('icon')
                                @yield('title')
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        <div class="col-sm-12 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.components.footer')
        </div>
    </div>
    <!-- Libs JS -->
    @include('layouts.components.scripts')
</body>

</html>
