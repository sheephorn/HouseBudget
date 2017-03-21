@section('header')
@inject('FunctionsDefinition', 'App\Definitions\FunctionsDefinition')
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{{ csrf_token() }}}">
    <title> {{{ getTitle() }}}</title>
    <link rel="stylesheet" type="text/css" href="{{{asset('assets/css/common.css?').str_random(5)}}}">
    <link rel="stylesheet" type="text/css" href="{{{asset('assets/bootstrap/css/bootstrap.min.css?').str_random(5)}}}">
    @yield('addCss')
  </head>
  <div id="loading-bg">
      <div id="loading">
          <img src="{{{ asset('assets/images/ajax-loader.gif') }}}" >
      </div>
  </div>
@stop
