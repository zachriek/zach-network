<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <!-- Primary Meta Tags -->
  <title>Network &mdash; {{ $title }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content="Auth Page">
  <meta name="author" content="Muhammad Zachrie Kurniawan">
  <meta name="description" content="Login atau Register untuk mengakses website Zach Network">
  <meta name="keywords"
    content="social media, media social, media, social, network, friends, follow, followers, Muhammad Zachrie Kurniawan, Zachrie Kurniawan, Zachrie, Kurniawan" />

  @stack('prepend-styles')
  @include('partials.guest-styles')
  @stack('addon-styles')

</head>

<body>

  <main>
    {{ $slot }}
  </main>

  @stack('prepend-scripts')
  @include('partials.guest-scripts')
  @stack('addon-scripts')

</body>

</html>
