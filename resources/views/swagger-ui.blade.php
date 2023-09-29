<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>API Platform - @yield('title')</title>
        <link rel="stylesheet" href="/vendor/api-platform/fonts/open-sans/400.css">
        <link rel="stylesheet" href="/vendor/api-platform/fonts/open-sans/700.css">
        <link rel="stylesheet" href="/vendor/api-platform/swagger-ui/swagger-ui.css">
        <link rel="stylesheet" href="/vendor/api-platform/style.css">
        <script id="swagger-data" type="application/json">{!! Illuminate\Support\Js::encode($swagger_data) !!}</script>
    </head>
    <body>
        <div id="swagger-ui" class="api-platform"></div>
        <script src="/vendor/api-platform/swagger-ui/swagger-ui-bundle.js"></script>
        <script src="/vendor/api-platform/swagger-ui/swagger-ui-standalone-preset.js"></script>
        <script src="/vendor/api-platform/init-swagger-ui.js"></script>
    </body>
</html>
