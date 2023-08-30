<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/dark.js' , 'resources/js/app.js'])
    <title>Laravel Livewire</title>
    <livewire:styles />
    <script src="../path/to/flowbite/dist/flowbite.bundle.js"></script>

</head>

<body class="dark:bg-gray-800">

<header class="bg-emerald-300 dark:bg-purple-800 sticky top-0 z-50 ">
    @include('partials.header')
</header>
  <main >
     {{ $slot }}
  </main>




    <livewire:scripts />

    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>
</html>
