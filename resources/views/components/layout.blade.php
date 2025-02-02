<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>Buku Induk Anak Panah</title>
    @vite('resources/css/app.css')
    @include('layout.partial.link')
  </head>

  <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
    <x-sidebar></x-sidebar>
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    <x-navbar>{{ $title }}</x-navbar>
      {{ $slot }}
    @include('layout.partial.footer')
  </body>
    @include('layout.partial.script')
</html>

