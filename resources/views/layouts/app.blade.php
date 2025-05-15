<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
        @yield('styles')
    </head>

    <body class="is-preload">
        <div id="wrapper">
            <div id="main">
                <div class="inner">

                    @include('partials.header')

                    @yield('content')

                </div>
            </div>

            <div id="sidebar">
                <div class="inner">

                    @include('partials.menu')

                    @include('partials.contact')

                    @include('partials.footer')

                </div>
            </div>
        </div>

        <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/assets/js/browser.min.js') }}"></script>
        <script src="{{ asset('/assets/js/breakpoints.min.js') }}"></script>
        <script src="{{ asset('/assets/js/util.js') }}"></script>
        <script src="{{ asset('/assets/js/main.js') }}"></script>
        @yield('scripts')
    </body>
</html>
