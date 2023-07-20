<!-- ====== Modal Section Start -->
<section >
  <div
    x-show="modalOpen"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform scale-90"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-90"
    class="fixed top-0 left-0 flex h-full min-h-screen w-full z-50 items-center justify-center bg-black bg-opacity-90 px-4 py-5"
  >
    <div
      @click.outside="modalOpen = false"
      class="w-full max-w-[570px] rounded-[20px] bg-white py-12 px-8 text-center md:py-[60px] md:px-[70px]"
    >
      <h3 class="text-dark pb-6 text-xl font-bold sm:text-2xl">
        Select Options
      </h3>

      <div class="space-y-6">
        <select wire:model="selectedCategory" class="bg-yellow-600 text-white py-5 px-8 hover:bg-amber-600 rounded cursor-pointer">
        <option value="" disabled class="font-bold text-black ">Select a category</option>

        @foreach ($categories as $category)
         <option >{{ $category->categoryName}}</option>
         @endforeach





        </select>

        <select wire:model="selectedCity" class="bg-yellow-600 text-white py-5 px-10 hover:bg-amber-600 rounded cursor-pointer">
        <option value="" disabled class="font-bold text-black ">Select a city</option>

          @foreach ($cities as $city)
          <option >{{ $city->cityName}}</option>
          @endforeach

        </select>
      </div>

      <div class="mt-12 flex justify-center space-x-4">
        <button
          @click="modalOpen = false"
          class="text-dark bg-transparent border border-[#E9EDF9] px-4 py-2 text-center text-base font-medium rounded transition hover:border-red-600 hover:bg-red-600 hover:text-white"
        >
          Cancel
        </button>
        <button class="bg-emerald-400 text-white px-4 py-2 text-center text-base font-medium rounded transition hover:bg-emerald-500"
                wire:click="save">
          Save
        </button>
      </div>
    </div>
  </div>
</section>
<!-- ====== Modal Section End -->
