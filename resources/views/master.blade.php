<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> @yield('title') | Jacana Ocean Life</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
  <link
    href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;500&family=Roboto:wght@100;400;500&display=swap"
    rel="stylesheet">
  @vite(['resources/scss/app.scss', 'resources/js/app.js'])
  @yield('social')
</head>

<body>
  @include('layout.header')
  <main>
    <div class="whatsapp-button">
      <a href="https://wa.me/+523329390134" target="_blank">
        <img src="{{ asset('images/wa.svg') }}" alt="WhatsApp" class="img-fluid">
      </a>
    </div>
    @yield('content')
  </main>
  @include('layout.footer')
</body>

</html>