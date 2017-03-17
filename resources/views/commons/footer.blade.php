@section('footer')
    @yield('addJs')
    <script src="{{{asset('js/vue.js?').str_random(5)}}}"></script>
    @yield('endJs')
  </body>
</html>
@stop
