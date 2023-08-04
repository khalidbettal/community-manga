<div class="text-center">
  <div
    x-data="
  {
    modalFilter:false, toggleFilter() { this.modalFilter = ! this.modalFilter }
  }
  "
    class="relative mb-8 inline-block text-left"
  >
    <button
      @click="toggleFilter()"
      class="bg-emerald-500 flex gap-3 rounded py-3 px-5 text-base font-semibold text-white"
    >
    <span>
    Select
    </span>

      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
    </svg>

    </button>


    <div>

        @include('partials.search')
    </div>

  </div>

</div>
