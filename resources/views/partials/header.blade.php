

<navbar class="w-full min-h-screen text-gray-900 bg-gradient-to-br from-transparent to-gray-500"
x-data="{ openMenu: false, toggleMenu() { this.openMenu = ! this.openMenu }
    , modalOpen:false, toggleSearch() { this.modalOpen = ! this.modalOpen } }">

  <nav class="flex justify-between items-center py-8 px-6 mx-auto max-w-screen-xl md:px-12 lg:px-16 xl:px-24">

    <button
      class="sidebar-open block md:hidden relative z-30 focus:outline-none transform  -translate-x-1/2 -translate-y-1/2 active:scale-75 transition-transform mt-5"
      @click="toggleMenu()">
      <svg xmlns="http://www.w3.org/2000/svg" class="btn-open h-5 w-5 transform transition duration-500 ease-in-out"
      :class="openMenu ? 'hidden' : 'block'"
        viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
          clip-rule="evenodd" />
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg"
        class="btn-close h-5 w-5 transform transition duration-500 ease-in-out" viewBox="0 0 20 20"
        :class="openMenu ? 'block' : 'hidden'"
        fill="currentColor">
        <path fill-rule="evenodd"
          d="M3 7a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 13a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
          clip-rule="evenodd" />
      </svg>
    </button>

    <a href="#" class="text-3xl md:text-4xl font-bold tracking-wide">
      My-<span class="text-yellow-500">pet</span>
    </a>

    <div
      class="menu-resposive  fixed flex inset-0 transition-all bg-white/70 backdrop-blur-xl z-20 md:static md:bg-transparent md:flex items-center justify-center space-y-8 md:space-y-0 flex-col md:flex-row md:space-x-8 -mt-56 md:mt-0 "
      :class="openMenu ? 'block' : 'hidden'">
      <ul class="flex flex-col md:flex-row items-center space-y-6 md:space-y-0 md:space-x-6 lg:md:-x-8">
        <li class="text-lg md:text-base lg:text-lg font-medium group ">
          <a href="/">Home
          </a>
          <div
            class="h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-100 transition-transform origin-left rounded-full duration-300 ease-out">
          </div>
        </li>
        <li class="text-lg md:text-base lg:text-lg font-medium group">
          <a href="posts">Posts
          </a>
          <div
            class="h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-100 transition-transform origin-left rounded-full duration-300 ease-out">
          </div>
        </li>
        <li class="text-lg md:text-base lg:text-lg font-medium group">
          <a href="#">Clinic
          </a>
          <div
            class="h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-100 transition-transform origin-left rounded-full duration-300 ease-out">
          </div>
        </li>
        <li class="text-lg md:text-base lg:text-lg font-medium group">
          <a href="#">Event
          </a>
          <div
            class="h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-100 transition-transform origin-left rounded-full duration-300 ease-out">
          </div>
        </li>
        <li class="text-lg md:text-base lg:text-lg font-medium group">
          <a href="#">Blog
          </a>
          <div
            class="h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-100 transition-transform origin-left rounded-full duration-300 ease-out">
          </div>
        </li>
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

  </nav>

    @livewire('search')

</navbar>




