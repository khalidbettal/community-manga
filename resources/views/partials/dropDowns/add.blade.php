

<div class="text-center">
  <div
    x-data="
  {
    dropdownOpen: false
  }
  "
    @click.outside="dropdownOpen = false"
    class="relative mb-8 inline-block text-left"
  >
    <button
      @click="dropdownOpen = !dropdownOpen"
      class="bg-emerald-500 flex items-center rounded py-3 px-5 text-base font-semibold text-white max-sm:text-xs"
    >
      Add
      <span class="pl-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="max-sm:w-4 max-sm:h-4 w-6 h-6 ">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
    </button>

  </div>
</div>


