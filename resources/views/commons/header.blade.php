@section('header')
@inject('FunctionsDefinition', 'App\Definitions\FunctionsDefinition')
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{{ csrf_token() }}}">
    <title> {{{ getTitle() }}}</title>
    @yield('addCss')
  </head>
@stop
