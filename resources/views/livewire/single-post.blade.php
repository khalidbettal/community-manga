<!-- component -->

<div>

    <div class="sm:mt-20 sm:mx-10 ">

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
    </div>
    <!-- main ends here -->


    <!-- comments section starts here -->

  <div class="bg-white dark:bg-gray-900 py-8 lg:py-16 mt-96">

  <div class="max-w-2xl mx-auto px-4">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion ({{ $comments->count() }})</h2>
    </div>

    <!-- form for comments here -->
    <form class="mb-6  " wire:submit.prevent="comment({{$post->id}})">
        <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <label for="comment" class="sr-only">Your comment</label>
            <textarea  rows="6"
            wire:model="comment"

                class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800 "
                placeholder="Write a comment..." ></textarea>



        </div>
    @auth

        <button type="submit"
            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
            Post comment
        </button>
        @else
      <a href="{{ route('login') }}">
        <button type="button"
    class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium
    rounded-lg text-sm px-2 md:px-6 py-2 text-center mr-3 md:mr-0 dark:bg-emerald-600 dark:hover:bg-emerald-700
     dark:focus:ring-emerald-800">Sing In to Comment</button></a>
     @endauth

    </form>

    <!-- end of form for comments here -->

  @include('partials.reply',['comments'=> $post->comments->where('parent_id', null),'class'=>'p-6 mb-6 text-base bg-white rounded-lg dark:bg-gray-900 border border-purple-500'])

  </div>
</div>
</div>








