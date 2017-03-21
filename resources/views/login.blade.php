@extends('commons.layout')
@include('commons.header')
@section('content')
<div class="div-base">
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12"><h1>@{{ title }}</h1></div>
            </div>
            <div class="row">
                <div class="col-lg-6">@{{ next }}</div>
                <div class="col-lg-6" v-on:click="inalert">@{{ prev }}</div>
            </div>
        </div>
    </div>
</div>
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
var header = new Vue({
    el : 'div.header',
    data : {
        title : "{{ getTitle() }}",
        next : "next!",
        prev : "prev!"
    },
    methods : {
        inalert : getA()
    }
});

</script>
@stop
@include('commons.footer')
