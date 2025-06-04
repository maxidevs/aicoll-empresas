<!DOCTYPE html>
<html lang="es">

<head>
  @include('partials.head')
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  @endif
</head>

<body>
  @include('partials.header')

</body>

</html>
