@section('footer')
    @yield('addJs')
    <script src="{{{asset('assets/js/vue.js?').str_random(5)}}}"></script>
    <script src="{{{asset('assets/js/jquery-3.2.0.js?').str_random(5)}}}"></script>
    <script src="{{{asset('assets/bootstrap/js/bootstrap.min.js?').str_random(5)}}}"></script>
    <script>
        $("#loading-bg, #loading").hide();
    </script>
    @yield('endJs')
  </body>
</html>
@stop
