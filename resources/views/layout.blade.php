<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Dream Crafter') }}</title>

        <link rel="stylesheet" href="{{ asset('resources/css/layout.css') }}">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/layout.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
        <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
        <div id="auth-container">
        <main>
                @inertia
        </main>
        </div>

    <!-- Scripts -->
   
     <!-- plugins:js -->
     <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js" type="text/javascript') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/proBanner.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    @vite(['resources/js/layout.js'])
    </body>
</html>
