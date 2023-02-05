<!DOCTYPE html>
<head>
    <title> Hello world</title>
    <link rel="stylesheet" href="/app.css">
    <script src="/app.js"></script>
</head>
<html lang="en">
    <body>
    {{ isset($banner)? $banner : '' }}
    {{ $content }}
    </body>
</html>
