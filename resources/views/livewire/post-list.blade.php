

    <section class="flex justify-around gap-10 px-44 py-10 bg-cyan-50 lg:py-24 font-poppins dark:bg-gray-800 ">

    <!-- div number one -->
  <!-- div number one -->

<!-- div number one -->
<div class="hidden lg:block w-1/4 flex flex-col text-center">
    <!-- Left section for categories and cities -->
    <div class="sticky z-40 top-24 mt-40">
        <!-- Template for types -->
        <div class="flex flex-col py-4 xl:py-8 bg-white dark:bg-gray-900">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-2">Types</h2>
            <div>
                <a href="#" class="inline-flex items-center px-2.5 py-0.5 mr-2 text-xs text-gray-700 bg-gray-200 rounded hover:bg-blue-600 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-100 dark:hover:bg-gray-800">
                    <input type="radio" name="type" class="hidden" value="" checked>
                    <span class="ml-2">All Types</span>
                </a>
                @foreach ($posts as $post)
                    <a href="#" class="inline-flex items-center px-2.5 py-0.5 mr-2 xl:m-1 text-xs text-gray-700 bg-gray-200 rounded hover:bg-blue-600 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-100 dark:hover:bg-gray-800">
                        <input type="radio" name="type" class="hidden" value="{{ $post->city->id }}">
                        <span class="ml-4 xl:py-1 ">{{ $post->city->cityName }}</span>
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Template for categories -->
        <div class="flex flex-col py-4 xl:py-8 bg-white dark:bg-gray-900 mt-4">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-2">Categories</h2>
            <div>
                <a href="#" class="inline-flex items-center px-2.5 py-0.5 mr-2 text-xs text-gray-700 bg-gray-200 rounded hover:bg-blue-600 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-100 dark:hover:bg-gray-800">
                    <input type="radio" name="category" class="hidden" value="" checked>
                    <span class="ml-2">All Categories</span>
                </a>
                @foreach ($posts as $post)
                    <a href="#" class="inline-flex items-center px-2.5 py-0.5 xl:m-1 mr-2 text-xs text-gray-700 bg-gray-200 rounded hover:bg-blue-600 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-100 dark:hover:bg-gray-800">
                        <input type="radio" name="category" class="hidden" value="{{ $post->category->id }}">
                        <span class="ml-2 xl:py-1">{{ $post->category->categoryName }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>


    <!-- div number two -->

        <div class="justify-center  flex-1 max-w-4xl w-auto py-4  text-left  ">
            <div class="flex justify-around gap-1 sm:mx-2">
                @include('partials.dropDowns.category')
                @include('partials.dropDowns.type')
                @include('partials.dropDowns.latest')
            </div>


            @foreach($posts as $post)
            @if (!empty($post->image))

                <div class="container max-w-4xl  px-8 pt-6 mx-auto rounded-lg shadow-sm grid grid-cols-1 bg-white dark:bg-gray-900  mb-6 lg:grid-cols-[1fr,70%]   gap-6">

                    <div>
                        <!-- User's name -->
                        <div class="flex items-center mb-2 ">
                        <span class="text-sm dark:text-gray-400">{{ $post->created_at }}</span>
                        </div>

                        <!-- Post image -->
                        <div>
                         <img src="{{ url('storage/posts/' . $post->image ) }}" alt="Post Image"
                              class="object-cover w-full rounded-md h-44">
                        </div>

                    </div>
                    <div class="px-4 py-4 lg:px-0">
                        <!-- Category and City -->
                        <a href="#"
                            class="px-2.5  py-0.5 mr-2 text-xs text-gray-700 bg-gray-200 rounded hover:bg-blue-600 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-100 dark:hover:bg-gray-800">
                            {{ $post->category->categoryName }}
                        </a>
                        <a href="#"
                            class="px-2.5  py-0.5 mr-2 text-xs text-gray-700 bg-gray-200 rounded hover:bg-blue-600 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-100 dark:hover:bg-gray-800">
                            {{ $post->city->cityName }}
                        </a>

                        <!-- Post title -->
                        <a href="#">
                            <h2 class="mt-3 mb-3 text-xl font-semibold text-gray-600 hover:text-blue-600 dark:text-gray-400">
                                {{ $post->title }}
                            </h2>
                        </a>

                        <!-- Other post information -->
                        <p class="mb-3 text-sm text-gray-500 dark:text-gray-400">
                           @if (Str::length($post->description) > 100)
                              <span class="hidden lg:inline">
                               {{ $post->description }}
                           </span>
                           <span class="lg:hidden">
                              {{ Str::limit($post->description, 100, '...') }}
                          </span>
                             @else
                      {{ $post->description }}
                     @endif
                    </p>
                        <div class="flex items-center justify-between mt-8">
			     <a rel="noopener noreferrer" href="#" class="hover:underline text-blue-500 dark:text-violet-400">Read more...</a>
			    <div>
				 <a rel="noopener noreferrer" href="#" class="flex items-center">
					<img src="https://source.unsplash.com/50x50/?portrait" alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full dark:bg-gray-500">
					<span class="hover:underline dark:text-gray-400">Leroy Jenkins</span>
				</a>
			    </div>
		      </div>
                    </div>
                </div>
         @elseif (empty($post->image))
                <div class="dark:bg-gray-800 dark:text-gray-100 bg-white">
	               <div class="container max-w-4xl px-10 py-6 mx-auto rounded-lg shadow-sm dark:bg-gray-900">
		<div class="flex items-center justify-between">
			<span class="text-sm dark:text-gray-400">{{ $post->created_at }}</span>
			<div>
            <a href="#"
                            class="px-2.5  py-0.5 mr-2 text-xs text-gray-700 bg-gray-200 rounded hover:bg-blue-600 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-100 dark:hover:bg-gray-800">
                            {{ $post->category->categoryName }}
                        </a>
                        <a href="#"
                            class="px-2.5  py-0.5 mr-2 text-xs text-gray-700 bg-gray-200 rounded hover:bg-blue-600 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-100 dark:hover:bg-gray-800">
                            {{ $post->city->cityName }}
                        </a>
            </div>
		   </div>
		   <div class="mt-3">
			<a rel="noopener noreferrer" href="#" class="text-2xl font-bold hover:underline">Nos creasse pendere crescit angelos etc</a>
			<p class="mt-2">Tamquam ita veritas res equidem. Ea in ad expertus paulatim poterunt. Imo volo aspi novi tur. Ferre hic neque vulgo hae athei spero. Tantumdem naturales excaecant notaverim etc cau perfacile occurrere. Loco visa to du huic at in dixi aër.</p>
		     </div>
		       <div class="flex items-center justify-between mt-4">
			     <a rel="noopener noreferrer" href="#" class="hover:underline dark:text-violet-400">Read more</a>
			    <div>
				 <a rel="noopener noreferrer" href="#" class="flex items-center">
					<img src="https://source.unsplash.com/50x50/?portrait" alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full dark:bg-gray-500">
					<span class="hover:underline dark:text-gray-400">Leroy Jenkins</span>
				</a>
			    </div>
		      </div>
	       </div>
         </div>
        @endif

            @endforeach
            <div class="mt-8">
            {{ $posts->links('livewire.pagination-links') }}
            </div>
        </div>





    </section>











