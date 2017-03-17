@extends('commons.layout')
@include('commons.header')
@section('content')
<input type="text" name="email" value="">
<input type="password" name="passward" value="">
<button type="button" id="login-button">@{{ message }}</button>
@stop
@section('endJs')
<script>
var app = new Vue({
    el : '#login-button',
    data : {
        message : 'HELLO',
    },
});
</script>
@stop
@include('commons.footer')
