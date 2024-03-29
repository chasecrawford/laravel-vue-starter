<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" type="text/css" media="all" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div id="app">
    <App
        primary_component="{{ $primary_component }}"
        :data="{{ json_encode($input) }}">
    </App>
</div>
<script type="text/javascript">
    window['app'] = {};
    window['app'].app_name = '{{ config('app.name') }}';
</script>
<script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
