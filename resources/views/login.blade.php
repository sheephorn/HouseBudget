@extends('commons.layout')
@include('commons.header')
@section('content')
@inject('func', 'App\Definitions\FunctionsDefinition')
<body>
	<form method="post" action="{{{ route($func::LOGIN) }}}">
		<input type="text" name="email" value="">
		<input type="password" name="passward" value="">
		<button type="button" id="login-button">@{{ message }}</button>
	</form>
</body>
@stop
@section('endJs')
<script>


var app = new Vue({
    el : '#login-button',
    data : {
        message : 'Login',
    },
});
var header = new Vue({
    el : 'div.header',
    data : {
        title : "{{ getTitle() }}",
        next : "next!",
        prev : "prev!"
    },
    methods : {
        inalert : function() {
            showAlert(this.next)
        }
    }
});

</script>
@stop
@include('commons.footer')
