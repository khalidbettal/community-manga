<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/dark.js','resources/js/select.js' , 'resources/js/app.js', 'resources/css/select.scss'])

    <title>Laravel Livewire</title>
    <livewire:styles />
    <script src="https://cdn.jsdelivr.net/npm/virtual-select-plugin@1.0.39/dist/virtual-select.min.js"
    integrity="sha256-Gsn2XyJGdUeHy0r4gaP1mJy1JkLiIWY6g6hJhV5UrIw=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/virtual-select-plugin@1.0.39/dist/virtual-select.min.css"
integrity="sha256-KqTuc/vUgQsb5EMyyxWf62qYinMUXDpWELyNx+cCUr0=" crossorigin="anonymous">

</head>

<body class="dark:bg-gray-800">

<header class="bg-emerald-300 dark:bg-purple-800 sticky top-0 z-50 ">
    @include('partials.header')
</header>
  <main >
     {{ $slot }}
  </main>




    <livewire:scripts />
    @stack('js')
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>
</html>
