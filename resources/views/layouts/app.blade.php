<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @stack('prepend-styles')
  @include('partials.app-styles')
  @stack('addon-styles')

  <title>Network &mdash; {{ $title }}</title>
</head>

<body>

  @include('layouts.navbar-app')

  @include('partials.flash-message')

  <main>
    {{ $slot }}
  </main>

  @include('layouts.footer-app')

  @stack('prepend-scripts')
  @include('partials.app-scripts')
  @stack('addon-scripts')

</body>

</html>
