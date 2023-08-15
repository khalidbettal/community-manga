
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/dark.js' , 'resources/js/app.js'])
    <title>Laravel Livewire</title>
    <livewire:styles />
    <script src="../path/to/flowbite/dist/flowbite.bundle.js"></script>
    <script>
  // It's best to inline this in `head` to avoid FOUC (flash of unstyled content) when changing pages or themes
  if (
    localStorage.getItem('color-theme') === 'dark' ||
    (!('color-theme' in localStorage) &&
      window.matchMedia('(prefers-color-scheme: dark)').matches)
  ) {
    document.documentElement.classList.add('dark');
  } else {
    document.documentElement.classList.remove('dark');
  }
</script>
</head>

<body class="dark:bg-gray-800">

<header class="bg-orange-50 dark:bg-purple-800 sticky top-0 z-50 ">
    @include('partials.header')
</header>
  <main >
     {{ $slot }}
  </main>




    <livewire:scripts />
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>
</html>
