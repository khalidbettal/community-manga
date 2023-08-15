<!-- component -->



    <main class="sm:mt-20 sm:mx-10 ">

      <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
        <div class="absolute left-0 bottom-0 w-full h-full z-10"
          style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
          @if (!empty($post->image))
        <img src="{{ url('storage/posts/' . $post->image) }}" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />

          @endif
        <div class="p-4 absolute bottom-0 left-0 z-20">
          <a href="#"
            class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">{{ $post->category->categoryName }}</a>
          <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
          {{ $post->title }}
          </h2>
          <div class="flex mt-3">
            <img src="https://randomuser.me/api/portraits/men/97.jpg"
              class="h-10 w-10 rounded-full mr-2 object-cover" />
            <div>
              <p class="font-semibold text-gray-200 text-sm"> {{ $post->user->name }}</p>
              <p class="font-semibold text-gray-400 text-xs"> {{ $post->created_at }} </p>
            </div>
          </div>
        </div>
      </div>

      <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed dark:text-white border p-2 rounded-lg border-orange-300" >
        <p class="pb-6 p-4">{{ $post->description }}</p>


      </div>
    </main>
    <!-- main ends here -->


    <!-- comments section starts here -->

  <section class="bg-white dark:bg-gray-900 py-8 lg:py-16 mt-96"
  x-data="{ reply: false }">
  <div class="max-w-2xl mx-auto px-4">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion ({{ $comments->count() }})</h2>
    </div>
    <form class="mb-6  ">
        <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <label for="comment" class="sr-only">Your comment</label>
            <textarea id="comment" rows="6"
                class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800 "
                placeholder="Write a comment..." required></textarea>
        </div>
        <button type="submit"
            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
            Post comment
        </button>
    </form>
  @foreach ($comments as $comment)

    <article class="p-6 mb-6 text-base bg-white rounded-lg dark:bg-gray-900 border border-purple-500">
        <footer class="flex justify-between items-center mb-2">
            <div class="flex items-center">
                <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                        class="mr-2 w-6 h-6 rounded-full"
                        src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                        alt="Michael Gough">{{ $comment->user->name }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                        title="February 8th, 2022">{{ $comment->created_at }}</time></p>
            </div>

        </footer>
        <p class="text-gray-500 dark:text-gray-400">{{ $comment->comment }}</p>
        <div class="flex items-center mt-4 space-x-4">
           <button type="button"
            @click="reply = !reply"
                class="flex items-center space-x-2 text-sm text-gray-500 hover:underline dark:text-gray-400">
                {{ $comment->replies->count() }}
                <svg aria-hidden="true" class="mr-1 w-4 h-4 mx-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>

            </button>
            <button type="button"
                class="flex items-center  text-sm text-gray-500 hover:underline dark:text-gray-400">

                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
               <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
             </svg>
                Reply
            </button>

        </div>
    </article>
    @foreach ($comment->replies as $reply)
    <article class="p-6 mb-6 ml-6 lg:ml-12 text-base bg-white rounded-lg dark:bg-gray-700 border border-emerald-500"
    x-show="reply">
        <footer class="flex justify-between items-center mb-2">
            <div class="flex items-center">
                <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                        class="mr-2 w-6 h-6 rounded-full"
                        src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                        alt="Jese Leos">{{ $reply->user->name }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-12"
                        title="February 12th, 2022">{{ $reply->created_at }}</time></p>
            </div>

        </footer>
        <p class="text-gray-500 dark:text-gray-400">{{ $reply->respond }}</p>
        <div class="flex items-center mt-4 space-x-4">
            <button type="button"
                class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
               <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
             </svg>
                Reply
            </button>
        </div>
    </article>
    @endforeach
    @endforeach

  </div>
</section>

