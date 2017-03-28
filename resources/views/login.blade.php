@extends('commons.layout')
@include('commons.header')
@section('content')
@inject('func', 'App\Definitions\FunctionsDefinition')
<body>
	<form method="post" action="{{{ route($func::GET_LOGIN) }}}" id="login-form">
		<input type="text" name="email" value="" v-model="email" data-email="aaa">
		<input type="password" name="passward" value="bbs" v-model="password" data-password="aa">
		<button type="button" id="login-button" @click="login">@{{ message }}</button>
		<button type="button" id="login-button" @click="regist">REGIST</button>
		<button type="submit" id='login-submit'>ログイン</button>
		{!! csrf_field() !!}
		<input type="hidden" value="{{  route($func::GET_LOGIN) }}" name="action">
	</form>
</body>
@stop
@section('endJs')
@include('js.login-js')
@stop
@include('commons.footer')
