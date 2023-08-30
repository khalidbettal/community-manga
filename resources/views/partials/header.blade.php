

<navbar class="w-full min-h-screen text-gray-900 bg-gradient-to-br from-transparent to-gray-500"
x-data="{ openMenu: false, toggleMenu() { this.openMenu = ! this.openMenu }
    , modalOpen:false, toggleSearch() { this.modalOpen = ! this.modalOpen } }">

  <nav class="flex justify-between items-center py-1 px-6 mx-auto max-w-screen-xl md:px-12 lg:px-16 xl:px-24">

    <button
      class="sidebar-open block md:hidden relative z-30 focus:outline-none transform  -translate-x-1/2 -translate-y-1/2 active:scale-75 transition-transform mt-5"
      @click="toggleMenu()">
      <svg xmlns="http://www.w3.org/2000/svg" class="btn-open h-5 w-5 transform transition duration-500 ease-in-out dark:text-white"
      :class="openMenu ? 'hidden' : 'block'"
        viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
          clip-rule="evenodd" />
      </svg>

      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
      viewBox="0 0 20 20" stroke-width="1.5" stroke="currentColor"
      class="btn-close h-5 w-5 transform transition font-bold duration-500 ease-in-out"
      :class="openMenu ? 'block' : 'hidden'">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
</svg>

    </button>

    <a href="#" class="text-3xl md:text-4xl font-bold  tracking-wide dark:text-white">
      My-<span class="text-yellow-500">pet</span>
    </a>

    <div
      class="menu-resposive  fixed flex inset-0 transition-all bg-white/70 backdrop-blur-xl z-20 md:static
      md:bg-transparent md:flex items-center justify-center space-y-8 md:space-y-0 flex-col md:flex-row md:space-x-8 -mt-56 md:mt-0 "
      :class="openMenu ? 'block' : 'hidden'">
      <ul class="flex flex-col md:flex-row items-center space-y-6 md:space-y-0 md:space-x-6 lg:md:-x-8">
        <li class="text-lg md:text-base lg:text-lg font-medium group ">


          <a href="/" class="font-bold md:dark:text-white hover:text-red-600">Home
          </a>
          <div
            class="h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-100 transition-transform origin-left rounded-full duration-300 ease-out">
          </div>
        </li>
        <li class="text-lg md:text-base lg:text-lg font-medium group">

          <a href="{{ route('posts') }}" class="font-bold md:dark:text-white hover:text-red-600">Posts
          </a>
          <div
            class="h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-100 transition-transform origin-left rounded-full duration-300 ease-out">
          </div>
        </li>
        <li class="text-lg md:text-base lg:text-lg font-medium group">
          <a href="#" class="font-bold md:dark:text-white hover:text-red-600">Clinic
          </a>
          <div
            class="h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-100 transition-transform origin-left rounded-full duration-300 ease-out">
          </div>
        </li>
        <li class="text-lg md:text-base lg:text-lg font-medium group">
          <a href="#" class="font-bold md:dark:text-white hover:text-red-600">Event
          </a>
          <div
            class="h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-100 transition-transform origin-left rounded-full duration-300 ease-out">
          </div>
        </li>
        @auth
      @include('partials.mobile-profile')
      @else
      <a href="{{ route('login') }}" class="sm:hidden">
        <button type="button"
    class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium
    rounded-lg text-sm px-2 md:px-6 py-2 text-center mr-3 md:mr-0 dark:bg-emerald-600 dark:hover:bg-emerald-700
     dark:focus:ring-emerald-800">Sing In </button></a>
      @endauth
      </ul>
    </div>


<button class="search-menu flex justify-center items-center h-12 px-5 font-medium text-gray-100 bg-yellow-500 whitespace-nowrap hover:bg-yellow-600 hover:text-white
    rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-500 focus:outline-none"
    @click="toggleSearch()">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
          clip-rule="evenodd" />
      </svg>
    </button>

    @auth
    @include('partials.laptop-profile')

    @else

    <a href="{{ route('login') }}" class="max-sm:hidden">
        <button type="button"
    class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium
    rounded-lg text-sm px-2 md:px-6 py-2 text-center mr-3 md:mr-0 dark:bg-emerald-600 dark:hover:bg-emerald-700
     dark:focus:ring-emerald-800">Sing In </button></a>
    @endauth



<!-- component -->


<button
  id="theme-toggle"
  type="button"
  class="text-black dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg  p-2.5"
>
  <svg
    id="theme-toggle-dark-icon"
    class="w-6 h-7 hidden"
    fill="currentColor"
    viewBox="0 0 20 20"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
    ></path>
  </svg>
  <svg
    id="theme-toggle-light-icon"
    class="w-6 h-7 hidden"
    fill="currentColor"
    viewBox="0 0 20 20"
    xmlns="http://www.w3.org/2000/svg"
  >
    <path
      d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
      fill-rule="evenodd"
      clip-rule="evenodd"
    ></path>
  </svg>
</button>
  </nav>



</navbar>




