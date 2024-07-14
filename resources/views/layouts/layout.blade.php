@include('layouts.head')

<body>
    @include('layouts.topbar')
    @include('layouts.header')
    <main>
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    @yield('breadcrumbs')
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Contents ======= -->
        @yield('contents')
        <!-- End Contents -->
    </main><!-- End #main -->
    @include('layouts.footer')
    @include('layouts.script')
</body>

</html>