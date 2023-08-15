
<div >

<div class="flex justify-center sm:mt-10 sm:gap-10 md:mt-40 flex-wrap max-sm:mt-10">


<div class="flex flex-col justify-center bg-slate-100  max-w-xs p-6 shadow-md rounded-xl sm:px-12 dark:bg-gray-900 dark:text-gray-100">
	<img src="https://source.unsplash.com/150x150/?portrait?3" alt="" class="w-32 h-32 mx-auto rounded-full dark:bg-gray-500 aspect-square">
	<div class="space-y-4 text-center divide-y divide-gray-700">
		<div class="my-2 space-y-1">
			<h2 class="text-xl font-semibold sm:text-2xl">{{ Auth::user()->name }}</h2>
			<p class="px-5 text-xs sm:text-base dark:text-gray-400">{{ Auth::user()->email }}</p>
		</div>
		
	</div>
</div>


<div class="my-6">


<div class="flex flex-row flex-wrap ">



  <div class="mb-10 w-full max-w-full flex-shrink px-8 sm:w-1/2 lg:w-1/4 ">
    <div class="h-full rounded-xl bg-white shadow-2xl dark:bg-cyan-800">
      <div x-data="{ tooltips: false }" class="relative px-6 pt-6 text-sm font-semibold dark:text-white">
        All Posts

      </div>
      <div class="flex flex-row justify-center px-6 py-4">
        <div class="relative h-14 w-14 self-center rounded-full bg-rose-500 text-center text-pink-50">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="bi bi-person absolute left-1/2 top-1/2 h-8 w-8 -translate-x-1/2 -translate-y-1/2 transform">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
</svg>

        </div>

      </div>
      <div class="px-7 pb-6">
      <button class="bg-blue-500  hover:bg-blue-700 text-white font-bold py-1 px-4 rounded">
     <a href="/posts">Explore</a>
</button>
        </div>
    </div>


  </div>
  <div class="mb-10 w-full max-w-full flex-shrink px-8 sm:w-1/2 lg:w-1/4">
    <div class="h-full rounded-xl bg-white shadow-2xl dark:bg-cyan-800">
      <div x-data="{ tooltips: false }" class="relative px-6 pt-6 text-sm font-semibold dark:text-white">
        My posts

      </div>
      <div class="flex flex-row justify-center px-6 py-4">
        <div class="relative h-14 w-14 self-center rounded-full bg-yellow-500 text-center text-yellow-50">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="bi bi-person absolute left-1/2 top-1/2 h-8 w-8 -translate-x-1/2 -translate-y-1/2 transform">
  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
</svg>

        </div>

      </div>
      <div class="px-8 pb-6">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded " wire:click="loadMyPosts">
     show
</button>
      </div>
    </div>
  </div>
  <div class="mb-10 w-full max-w-full flex-shrink px-8 sm:w-1/2 lg:w-1/4">
    <div class="h-full rounded-xl bg-white shadow-2xl dark:bg-cyan-800">
      <div x-data="{ tooltips: false }" class="relative px-6 pt-6 text-sm font-semibold dark:text-white">
        Add Post

      </div>
      <div class="flex flex-row justify-center px-6 py-4">
        <div class="relative h-14 w-14 self-center rounded-full bg-green-500 text-center text-green-50">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="bi bi-person absolute left-1/2 top-1/2 h-8 w-8 -translate-x-1/2 -translate-y-1/2 transform">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v6m3-3H9m4.06-7.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
</svg>

        </div>

      </div>
      <div class="px-6 pb-6">
      <button

      class="bg-emerald-500 flex items-center rounded py-1 px-4 text-base font-semibold text-white"
    >
      Add
      <span class="pl-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
    </button>
      </div>
    </div>
  </div>
  <div class="mb-10 w-full max-w-full flex-shrink px-8 sm:w-1/2 lg:w-1/4 ">
    <div class="h-full rounded-xl bg-white shadow-2xl dark:bg-cyan-800">
      <div x-data="{ tooltips: false }" class="relative px-6 pt-6 text-sm font-semibold dark:text-white">
        Settings <span class="mt-1 h-2 w-2 animate-pulse rounded-full bg-green-500 ltr:float-right rtl:float-left"></span></div>
      <div class="flex flex-row justify-center px-6 py-4">
        <div class="relative h-14 w-14 self-center rounded-full bg-indigo-500 text-center text-indigo-50">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="bi bi-person absolute left-1/2 top-1/2 h-8 w-8 -translate-x-1/2 -translate-y-1/2 transform">
  <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
   </svg>
        </div>

      </div>
      <div class="px-5 pb-6 ">
      <button

class="bg-blue-500  rounded py-1 px-4 text-base font-semibold text-white "
>
<a href="/profile" class="flex items-center">Open<span class="pl-2">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
</svg>
</a>
</button>
      </div>
    </div>
  </div>
  </div>
</div>
</div>

</div>

