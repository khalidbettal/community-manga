

    <section class="flex justify-around gap-10 px-44 py-10 bg-gray-100 lg:py-24 font-poppins  dark:bg-gray-700">



<!-- div number one -->
<div class="hidden lg:block w-1/5 flex flex-col text-center">
    <!-- Left section for categories and cities -->
    <div class="sticky z-40 top-24 mt-40">
        <!-- Template for types -->
        <div class="flex flex-col py-4 xl:py-8 bg-white dark:bg-gray-900">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-2">Genres</h2>
            <div>
                <a href="#" class="inline-flex items-center px-2.5 py-0.5 mr-2 text-xs text-gray-700 bg-gray-200 rounded hover:bg-blue-600 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-100 dark:hover:bg-gray-800">
                    <input type="radio" name="type" class="hidden" value="" checked>
                    <span class="ml-2">All Types</span>
                </a>
                @foreach ($genres as $genre)
                    <a href="#" class="inline-flex items-center px-2.5 py-0.5 mr-2 xl:m-1 text-xs text-gray-700 bg-gray-200 rounded hover:bg-blue-600 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-100 dark:hover:bg-gray-800">
                        <input type="radio" name="type" class="hidden" value="{{ $genre->id }}">
                        <span class="ml-4 xl:py-1 ">{{ $genre->genreName }}</span>
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
                @foreach ($categories as $category)
                    <a href="#" class="inline-flex items-center px-2.5 py-0.5 xl:m-1 mr-2 text-xs text-gray-700 bg-gray-200 rounded hover:bg-blue-600 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-100 dark:hover:bg-gray-800">
                        <input type="radio" name="category" class="hidden" value="{{ $category->id }}">
                        <span class="ml-2 xl:py-1">{{ $category->categoryName }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>


    <!-- div number two -->

        <div class="justify-center  flex-1 max-w-4xl w-auto py-4  text-left  ">
            <div class="flex gap-3 justify-around sm:mx-2">
                @include('partials.dropDowns.select')
                @include('partials.dropDowns.latest')
                @include('partials.dropDowns.add')
            </div>


            @foreach($posts as $post)
            @if (!empty($post->image))

                <div class=" max-w-4xl  px-8 pt-6 md:pb-2 mx-auto rounded-lg  shadow-sm grid grid-cols-1 bg-white dark:bg-gray-900  mb-6 lg:grid-cols-[1fr,70%]   gap-6">

                    <div>
                        <!-- User's name -->
                        <div class="flex items-center mb-2 ">
                        <span class="text-sm dark:text-gray-400">{{ $post->created_at }}</span>
                        </div>

                        <!-- Post image -->
                        <div>
                   <img src="{{ url('storage/posts/' . $post->image) }}" alt="Post Image"
                     class="object-cover rounded-md h-44 sm:h-[11rem] w-full">
                  </div>

                    </div>
                    <div class="px-4 py-4 lg:px-0">
                        <!-- Category and City -->
                        <a href="#"
                            class="px-2.5  py-0.5 mr-2 text-xs text-gray-700 bg-gray-200 rounded hover:bg-blue-600 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-100 dark:hover:bg-gray-800">
                            {{ $post->category->categoryName }}
                        </a>
                        @foreach ($post->genres as $genre)
                        <a href="#"
                            class="px-2.5  py-0.5 mr-2 text-xs text-gray-700 bg-gray-200 rounded hover:bg-blue-600 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-100 dark:hover:bg-gray-800">
                            {{ $genre->genreName }}
                        </a>
                         @endforeach


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
                        {{ Str::limit($post->description, 200, '...') }}
                          </span>
                     <span class="lg:hidden">
                         {{ Str::limit($post->description, 100, '...') }}
                 </span>
                   @else
                   {{ $post->description }}
                 @endif
                 <span>
			     <a rel="noopener noreferrer" href="#" class="hover:underline text-blue-500 dark:text-violet-400">...Read more</a>

                 </span>
                 </p>

         <div class="flex items-center justify-around mt-8 gap-1">
            <div class="sm:flex sm:items-center sm:gap-2 text-gray-500">
            <div class="flex items-center gap-1 text-gray-500">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
         <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
        </svg>
        <p class="text-xs">1600</p>

                </div>

            </div>
            <!-- comments -->
          <div class=" sm:flex sm:items-center sm:gap-2 ">
        <div class="flex items-center gap-1 text-gray-500 justify-around">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"
            />
          </svg>

          <p class="text-xs">14 <span class="max-md:hidden">comments</span></p>
        </div>
</div>

			    <div>
				 <a rel="noopener noreferrer" href="#" class="flex justify-center">
					<img src="https://source.unsplash.com/50x50/?portrait" alt="avatar" class="object-cover w-4 h-4 mx-1 rounded-full dark:bg-gray-500">
					<span class="hover:underline dark:text-gray-400 text-xs">{{ $post->user->name }}</span>
				</a>

			    </div>

		      </div>

                    </div>

                </div>
         @elseif (empty($post->image))
                <div class="dark:bg-gray-800 dark:text-gray-100 bg-white mt-4" >
	               <div class="container max-w-4xl px-10 py-6 mx-auto rounded-lg shadow-sm dark:bg-gray-900">
		<div class="flex items-center justify-between">
			<span class="text-sm dark:text-gray-400">{{ $post->created_at }}</span>
			<div>
            <a href="#"
                            class="px-2.5  py-0.5 mr-2 text-xs text-gray-700 bg-gray-200 rounded hover:bg-blue-600 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-100 dark:hover:bg-gray-800">
                            {{ $post->category->categoryName }}
                        </a>
                        @foreach ($post->genres as $genre)
                        <a href="#"
                            class="px-2.5  py-0.5 mr-2 text-xs text-gray-700 bg-gray-200 rounded hover:bg-blue-600 dark:bg-gray-700 dark:text-gray-400 hover:text-gray-100 dark:hover:bg-gray-800">
                            {{ $genre->genreName }}
                        </a>
                        @endforeach

            </div>
		   </div>
		   <div class="mt-3">
			<a rel="noopener noreferrer" href="#" class="text-2xl font-bold hover:underline">{{ $post->title }}</a>
			<p class="mb-3 text-sm text-gray-500 dark:text-gray-400">
                    @if (Str::length($post->description) > 100)
                       <span class="hidden lg:inline">
                        {{ Str::limit($post->description, 300, '...') }}
                          </span>
                     <span class="lg:hidden">
                         {{ Str::limit($post->description, 100, '...') }}
                 </span>
                   @else
                   {{ $post->description }}
                 @endif
                 </p>
		     </div>
		       <div class="flex items-center justify-between mt-4">
			     <a rel="noopener noreferrer" href="#" class="hover:underline dark:text-violet-400">Read more</a>
			    <div>
				 <a rel="noopener noreferrer" href="#" class="flex items-center">
					<img src="https://source.unsplash.com/50x50/?portrait" alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full dark:bg-gray-500">
					<span class="hover:underline dark:text-gray-400">{{ $post->user->name}}</span>
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











