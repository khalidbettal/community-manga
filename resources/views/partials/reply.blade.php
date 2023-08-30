@foreach ($comments as $comment)
<div  x-data="{ reply : false ,replyOpen: false }" >




     <!-- main comment here -->
    <article class="{{ $class }}">
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
                {{count($comment->replies) }} Comments
                <svg aria-hidden="true" class="mr-1 w-4 h-4 mx-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>

            </button>
            <button type="button"
            @click="replyOpen = !replyOpen"
                class="flex items-center  text-sm text-gray-500 hover:underline dark:text-gray-400">

                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
               <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
             </svg>
                Reply
            </button>

        </div>

    </article>


    <!-- end of main comment here -->

    <!-- reply form here -->
    <form class="mb-6" x-show="replyOpen" wire:submit.prevent="reply({{ $post->id }}, {{ $comment->id }})">
     @csrf
        <div class=" px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <label for="comment" class="sr-only">Your comment</label>
            <textarea id="comment" rows="6"
            wire:model="reply"
                class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800 "
                placeholder="Write a comment..." required></textarea>

        </div>

        <div>
            @auth

        <button type="submit"
            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-emerald-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
            Reply
        </button>
        <button
            @click = "replyOpen = false"
            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center bg-gray-100 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
            Close
        </button>
      @else
      <a href="{{ route('login') }}">
        <button type="button"
    class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium
    rounded-lg text-sm px-2 md:px-6 py-2 text-center mr-3 md:mr-0 dark:bg-emerald-600 dark:hover:bg-emerald-700
     dark:focus:ring-emerald-800">Sing In to Comment</button></a>
            @endauth
        </div>

    </form>

    <!-- end of reply form here -->

    <!-- replies here -->

    <div x-show="reply" >

@include('partials.reply', ['comments' => $comment->replies , 'class'=>'p-6 mb-6 ml-6 lg:ml-12 text-base bg-white rounded-lg dark:bg-gray-700 border border-emerald-500'])

</div>

    </div>

    @endforeach
