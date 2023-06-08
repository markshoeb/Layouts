@include('layout.header')

<body>
    @include('layout.sidebar')

    @yield('content')

    <script src="{{asset('asset/js/custom.js')}}"></script>
</body>

</html>