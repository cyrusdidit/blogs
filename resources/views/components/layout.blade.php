<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'BLOGS IG :3' }}</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    
<x-navigation></x-navigation>

{{ $slot }}  <!-- This is where the page content will be displayed -->

</body>
</html>